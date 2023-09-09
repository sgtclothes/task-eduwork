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
use App\DataTables\TransactionDataTable;

class TransactionController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(TransactionDataTable $dataTable)
    {
       

        // return $dataTable->render('pages.transaction.index');
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
            ->addColumn('status_tr', function ($transaction) {
               if($transaction->status == 0) {
                return "Tidak Aktif";
               }
               else {
                return "Aktif";
               }
            })
            
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="{{javascript:void(0)}}" class="edit btn btn-success btn-sm">Edit</a> 
                <a href="javascript:void(0)" class="detail btn btn-warning btn-sm">detail</a>
                <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            // ->addColumn('details', function($transaction) {
                
            // })
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
    public function edit(Transaction $transaction, $id)
    {
        return view('pages.transaction.edit');
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

        return redirect()->route('transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
    }
}
