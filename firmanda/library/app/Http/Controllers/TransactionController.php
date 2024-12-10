<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Book;
use App\Models\Member;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transactions  = Transaction::with('transactionDetails.book')->get();
        $years = DB::table('transactions')
            ->selectRaw('YEAR(date_start) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');
        // $status = $request->query('status');
        $query = Transaction::with('transactionDetails.book');
        if ($request->has('status')) {
            $status = $request->get('status');
            // return $status;
            if ($status === 'returnedAll') {
                $query->whereDoesntHave('transactionDetails', function ($q) {
                    $q->where('status', '!=', 'returned');
                });
            } elseif ($status === 'borrowed') {
                $query->whereHas('transactionDetails', function ($q) {
                    $q->where('status', 'borrowed');
                });
            } elseif ($status === 'borrowedAll') {
                $query->whereDoesntHave('transactionDetails', function ($q) {
                    $q->where('status', '!=', 'borrowed');
                });
            } elseif ($status === 'all') {
                $query->whereHas('transactionDetails');
            }
        }
        if ($request->has('year')) {
            $query->whereYear('date_start', $request->get('year'));
        }
        $transactions = $query->get();

        return view('admin.transaction.index', compact("transactions",'years'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::with("catalog")->paginate(10);
        return view("admin.transaction.create", compact("books"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // return response()->json(['message' => 'Data logged.']);

        $datas = $request->all();

        // // $borrowedBooks = []; 

        $transaction = Transaction::create([

            'member_id' => $datas['user_id'],
            'date_start' => now()->format('Y-m-d'),
            'date_end' => now()->addDays(14)->format('Y-m-d'),

        ]);

        for ($i = 0; $i < count($datas['book_id']); $i++) {

            // $dataA = json_decode($data, true); 
            TransactionDetail::create([
                'book_id' => $datas['book_id'][$i],
                // 'user_id' => $userID,

                'transaction_id' => $transaction->id,
                'qty' => $datas['book_qty'][$i],
                'status' => 'borrowed',
            ]);
            $book =  Book::find($datas['book_id'][$i]);
            $qtyBook = $datas['book_qty'][$i];
            $totalBook = $book->qty - $qtyBook;
            $book->update([
                'qty' => $totalBook,
            ]);
        }
        // return redirect('transactions'); 
        return response()->json(['message' => "data berhasil di simpan"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        // $transactions = Transaction::all();
        $transactions  = Transaction::with('transactionDetails.book')->findOrFail($transaction->id);
        $allBorrowed = $transactions->transactionDetails->every(function ($detail) {
            return $detail->status === "borrowed";
        });
        $someBorrowed = $transactions->transactionDetails->contains(function ($detail) {
            return $detail->status === "borrowed";
        });
        $allReturned = $transactions->transactionDetails->every(function ($detail) {
            return $detail->status === "returned";
        });
        // return view('admin.transaction.detail',compact('transactions'));
        return view('admin.transaction.detail', compact('transaction', "transactions", "allBorrowed", "someBorrowed", "allReturned"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $books = Transaction::with('transactionDetails.book')->findOrFail($transaction->id);
        $transactionDetails = $transaction->transactionDetails;
        // return $transactionDetails;
        // return $books;
        return view(('admin.transaction.return'), compact('transaction', 'books', 'transactionDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        // dd($request->all());
        $selectedBooks = $request->book_id;
        list($book_id, $transactionDetail_id) = explode('|', $selectedBooks);

        $transactionDetail = TransactionDetail::find($transactionDetail_id);
        $transactionDetail = $transactionDetail->where('book_id', '=', $book_id)->first();
        $books = Book::find($book_id);
        if ($book_id && $transactionDetail_id) {
            if ($request->status == 'returned') {
                // return $books->qty +$transactionDetail->qty;
                $books->update([
                    'qty' => $books->qty + $transactionDetail->qty,
                ]);
                $transactionDetail->update([
                    'status' => $request->status,
                    'date' => $request->date_end,
                    'qty' => 0,
                ]);
            }
            // Gunakan $bookId dan $transactionDetailId sesuai kebutuhan
            // return response()->json([
            //     'book_id' => $book_id,
            //     'transaction_detail_id' => $transactionDetail_id,
            //     'qty' => $transactionDetail->qty,
            //     'status' => $request->status,
            //     'date' => $request->date_end,
            // ]);
        }
        return redirect('transactions');

        // return $transactionDetail->qty;

        // return dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
    public function cari(Request $request)
    {
        $cari  = $request->cari;

        $books = Book::with("catalog")
            ->where("title", 'like', '%' . $cari . '%')
            ->orWhereHas("catalog", function ($query) use ($cari) {
                $query->where("name", "like", "%" . $cari . "%");
            })
            ->paginate();
        // return view("admin.transaction.create");
        return response()->json($books);
    }
    public function findMember(Request $request)
    {
        $finding = $request->get('term');
        $members = Member::where('name', 'LIKE', '%' . $finding . '%')->get(['id', 'name']);
        return response()->json($members);
    }

    public function indexReturn()
    {
        // $transactions = Transaction::where('status', 'borrowed')->get();
        // return view('admin.transaction.return', compact('transactions'));

    }
}
