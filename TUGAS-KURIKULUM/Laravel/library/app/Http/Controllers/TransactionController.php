<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (auth()->user()->role('writer')) {
            // // $datas = Transaction::query();
            // dd($request->status);
            // $datas = Transaction::with('members')->where('status', $request->status);

            if ($request->status) {
                $datas = Transaction::with('member')->where('status', $request->status);
                $datatables = datatables()->of($datas)->addIndexColumn();
                if ($request->ajax()) {
                    return $datatables->make(true);
                }
            }

            $members = Member::all();
            $books = Book::all();
            
            return view('admin.transaction.transaction', compact('members', 'books'));    
        } else {
            return abort(403);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function api() 
    {
        $transactions = Transaction::leftJoin('members', 'transactions.member_id', '=', 'members.id')
            ->leftJoin('books', 'transactions.book_id', '=', 'books.id')
            ->selectRaw('
                transactions.id,
                members.name as member_name,
                GROUP_CONCAT(transactions.date_start) as date_starts,
                GROUP_CONCAT(transactions.date_end) as date_ends,
                GROUP_CONCAT(transactions.status) as statuses,
                COUNT(transactions.book_id) as total_books
            ')
            ->groupBy('transactions.id', 'members.name')
            ->get();

        $datatables = datatables()->of($transactions)
            ->addIndexColumn()
            ->addColumn('date_starts', function ($transaction) {
                return implode(', ', explode(',', $transaction->date_starts));
            })
            ->addColumn('date_ends', function ($transaction) {
                return implode(', ', explode(',', $transaction->date_ends));
            })
            ->addColumn('statuses', function ($transaction) {
                return implode(', ', explode(',', $transaction->statuses));
            })
            ->addColumn('total_books', function ($transaction) {
                return $transaction->total_books;
            })
            ->addColumn('days', function ($transaction) {
                $start = Carbon::parse(explode(',', $transaction->date_starts)[0]);
                $end = Carbon::parse(explode(',', $transaction->date_ends)[0]);
                $days = $start->diffInDays($end);
                $days = $days . ' days';
                return $days;
            })
            ->addColumn('status', function ($transaction) {
                $statuses = explode(',', $transaction->statuses);
                if (in_array('1', $statuses)) {
                    return "sudah dikembalikan";
                } else {
                    return "belum dikembalikan";
                }
            });

        return $datatables->make(true);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            // Validasi data
            $this->validate($request, [
                'member_id' => ['required'],
                'book_id' => ['required'],
                'date_start' => ['required'],
                'date_end' => ['required'],
            ]);

            $bookID = $request->input('book_id');

            foreach ($bookID as $value) {
                Transaction::create([
                    'member_id' => $request->input('member_id'),
                    'date_start' => $request->input('date_start'),
                    'date_end' => $request->input('date_end'),
                    'status' => $request->input('status'),
                    'book_id' => $value
                ]);
            }

            // Redirect ke halaman yang sesuai
            return redirect('transactions');
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
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        $this->validate($request, [
            'member_id' => ['required'],
            'book_id' => ['required'],
            'date_start' => ['required'],
            'date_end' => ['required'],
        ]);

        $transaction->update($request->all());

        return redirect('transaction');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
    }
}
