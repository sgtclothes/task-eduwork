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
    public function index(Request $request)
    {
        // $transactions = Transaction::->get();

        // if ($request->status) {
        //     $datas = Transaction::where('status', $request->status)->with(['member:id,name', 'details', 'details.book'])->get();
        if (($request->date_start or $request->status) or ($request->date_start and $request->status)) {
            $datas = Transaction::where('date_start', $request->date_start)->orWhere('status', $request->status)
                ->with(['member:id,name', 'details', 'details.book'])->get();

            if ($request->date_start == "NONE"  or $request->status == "NONE") {
                $datas = Transaction::with(['member:id,name', 'details', 'details.book'])->get();
            }
            $datatables = datatables()->of($datas)
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
                    if ($transaction->status == 1) {
                        return "belum dikembalikan";
                    } else {
                        return "sudah dikembalikan";
                    }
                })

                ->addColumn('action', 'pages.transaction.action')
                ->rawColumns(['action'])
                ->addIndexColumn();

            return $datatables->make(true);
        }

        $transactions = DB::table('transactions')->distinct()->get('date_start');

        return view('pages.transaction.index', compact('transactions'));
    }

    public function api(Request $request)
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
                if ($transaction->status == 0) {
                    return "belum dikembalikan";
                } else {
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
        return view('pages.transaction.create', compact('members', 'books'));
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

        // $detail = TransactionDetail::findOrFail($tr_details[1]);

        // $book = Book::with('details')->findOrFail($detail->book_id);

        // if ($detail->book_id) {
        //     $book->qty -= 1;
        // }


        // $book->save();


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

        return view('pages.transaction.edit', compact('transactions', 'members', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules =  [
            "member_id" => "required|numeric",
            "status" => "required|in:1,2",
            "date_start" => "required|date",
            "date_end" => "required|date",
        ];

        $validateData = $request->validate($rules);
        $transaction = Transaction::findOrFail($id);

        $transaction->update($validateData);

        $tr_details = [];

        foreach ($request->book_id as $value) {
            $tr_details[]  = [
                'transaction_id' => $transaction->id,
                'book_id' => $value,

            ];
        }
        // $book_ids = array_keys($tr_details);
        // dd($book_ids);
        // $book_id = $tr_details[0]['book_id'];
        // $tranasaction_id = $tr_details[0]['transaction_id'];
        // DB::table('transaction_details')->upsert($tr_details, $tr_details, $book_ids);
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

        return redirect()->route('transactions.index');
    }
}
