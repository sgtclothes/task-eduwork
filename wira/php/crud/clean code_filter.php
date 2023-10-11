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
use DateTime;

class TransactionController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Transaction::with(['member:id,name', 'details', 'details.book']);

        if (isset($request->date_start) and isset($request->status)) {
            if ($request->date_start != '0') {
                $datas->whereDate('date_start', $request->date_start);
            }
            if ($request->status != "0") {
                $datas->where('status', $request->status);
            }
            $datas->get();
            return $this->generateDataTable($datas);
        }

        $transactions = DB::table('transactions')->distinct()->get('date_start');
        $tr = Transaction::all();

        $tes = date("Y-m-d");

        $late_date = Transaction::with('member:id,name')
            ->where('date_end', '<', $tes)
            ->where('status', '=', 1)->get();

        $count = $late_date->count();

        return view('pages.transaction.index', compact('transactions', 'late_date', 'count'));
    }

    public function generateDataTable($datas)
    {

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
    
}
