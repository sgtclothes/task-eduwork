<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Member;
use App\Models\Transaction;
use Illuminate\Http\Request;
use SebastianBergmann\Diff\Diff;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\DataTables\TransactionDataTable;

class TransactionController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(TransactionDataTable $dataTable)
    {
        return view('pages.transaction.index');
    }

    public function api()
    {
        $transactions = Transaction::with(['member:id,name', 'details', 'details.book'])->get();
        
        $datatables = datatables()->of($transactions)
            ->addColumn('date start', function ($transaction) {
                return convert_date($transaction->date_start);
            })
            ->addColumn('date end', function ($transaction) {
                return convert_date($transaction->date_end);
            })
            ->addColumn('days', function ($transaction) {
                $start =  Carbon::parse($transaction->date_start);
                $end =  Carbon::parse($transaction->date_end);
                $days = $start->diffInDays($end);
                $days = $days . ' hari';
                return $days;
            })
            ->addColumn('amount', function ($transaction) {
                return count($transaction->details);
            })

            ->addColumn('price', function ($transaction) {
                return count($transaction->details);
            })

            
            ->addColumn('status_tr', function ($transaction) {
               if($transaction->status == 0) {
                return "belum dikembalikan";
               }
               else {
                return "sudah dikembalikan";
               }
            })

            ->addColumn('action', 'pages.transaction.action')
            ->rawColumns(['action'])
            ->addIndexColumn();

        return $datatables->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = Member::all();
        $books = Book::all();
        return view('pages.transaction.create', compact('members','books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "member_id" => "required|numeric",
            "date_start" => "required|date",
            "date_end" => "required|date",
        ]);
        
        $transactions = Transaction::create($data);
    
        $tr_details = [];

        foreach ($request->book_id as $value) {
           $tr_details[] = [
                'transaction_id' => $transactions->id,
                'book_id' => $value
           ];
        }
        
        DB::table('transaction_details')->insert($tr_details);
        
        return redirect()->route('transactions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transactions = Transaction::with(['member:id,name', 'details', 'details.book'])->find($id);
        
        $members = Member::all();
        $books = Book::all();
        
        return view('pages.transaction.edit', compact('transactions','members','books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules =  [
            "member_id" => "required|numeric",
            "status" => "required|in:0,1",
            "date_start" => "required|date",
            "date_end" => "required|date",
        ];

        $validateData = $request->validate($rules);
        $transaction = Transaction::findOrFail($id);

        $transaction->update($validateData);

        $tr_details = [];

        foreach ($request->book_id as $value) {
            $tr_details[] = [
                'transaction_id' => $transaction->id,
                'book_id' => $value
            ];
        }

        DB::table('transaction_details')->insert($tr_details);

        return redirect()->route('transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->details()->delete();
        
        $transaction->delete();

        return redirect()->route('transactions.index');
    }
}
