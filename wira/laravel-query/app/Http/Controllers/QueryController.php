<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Transaction;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class QueryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // no 1
        // $member = Member::select('*')->where('role','ADMIN')->get();

        // no 2
        // $member = Member::select('*')->where('role','!=','ADMIN')->get();

        // no 3
        // $member = Transaction::select('anggota.id_anggota as id','anggota.nama as nama')->rightJoin('anggota', 'peminjaman.id_anggota','=','anggota.id_anggota')
        // ->where('peminjaman.id_anggota', NULL)
        // ->get();

        // no 4
        // $member = Transaction::select('peminjaman.id_anggota as id','anggota.nama as nama','anggota.telp as telp')->leftJoin('anggota', 'peminjaman.id_anggota','=','anggota.id_anggota')
        // ->orderBy('anggota.nama','asc')
        // ->get();

        // no 5
        // $member = Transaction::select(array('peminjaman.id_anggota as id', 'anggota.nama as nama', 'anggota.telp as telp',DB::raw('COUNT(peminjaman.id_pinjam) as total_pinjam')))->join('anggota', 'peminjaman.id_anggota','=','anggota.id_anggota')
        // ->groupBy('peminjaman.id_anggota')
        // ->having(DB::raw('count(peminjaman.id_pinjam)'), '>', 1)
        // ->orderByRaw('COUNT(peminjaman.id_pinjam) DESC')
        // ->get();

        // no 6
        // $member = Transaction::select('peminjaman.id_anggota as id', 'anggota.nama as nama', 'anggota.telp as telp','anggota.alamat as alamat',
        // 'peminjaman.tgl_pinjam as tanggal_pinjam','peminjaman.tgl_kembali as tanggal_kembali')->leftJoin('anggota', 'peminjaman.id_anggota','=','anggota.id_anggota')
        // ->orderBy('anggota.nama')
        // ->get();

        //  no 7
        // $member = Transaction::select(
        //     'peminjaman.id_anggota as id',
        //     'anggota.nama as nama',
        //     'anggota.telp as telp',
        //     'anggota.alamat as alamat',
        //     'peminjaman.tgl_pinjam as tanggal_pinjam',
        //     'peminjaman.tgl_kembali as tanggal_kembali'
        // )->leftJoin('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
        //     ->whereMonth('peminjaman.tgl_kembali', '06')
        //     ->orderBy('anggota.nama')
        //     ->get();

        //  no 8
        // $member = Transaction::select(
        //     'peminjaman.id_anggota as id',
        //     'anggota.nama as nama',
        //     'anggota.telp as telp',
        //     'anggota.alamat as alamat',
        //     'peminjaman.tgl_pinjam as tanggal_pinjam',
        //     'peminjaman.tgl_kembali as tanggal_kembali'
        // )->leftJoin('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
        //     ->whereMonth('peminjaman.tgl_pinjam', '05')
        //     ->orderBy('anggota.nama', 'asc')
        //     ->get();

        //  no 9
        // $member = Transaction::select(
        //     'peminjaman.id_anggota as id',
        //     'anggota.nama as nama',
        //     'anggota.telp as telp',
        //     'anggota.alamat as alamat',
        //     'peminjaman.tgl_pinjam as tanggal_pinjam',
        //     'peminjaman.tgl_kembali as tanggal_kembali'
        // )->leftJoin('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
        //     ->where(function ($query) {
        //         $query->whereMonth('peminjaman.tgl_kembali', '06')
        //             ->orWhereMonth('peminjaman.tgl_pinjam', '06');
        //     })
        //     ->orderBy('anggota.nama', 'asc')
        //     ->get();

        //  no 10
        // $member = Transaction::select(
        //     'peminjaman.id_anggota as id',
        //     'anggota.nama as nama',
        //     'anggota.telp as telp',
        //     'anggota.alamat as alamat',
        //     'peminjaman.tgl_pinjam as tanggal_pinjam',
        //     'peminjaman.tgl_kembali as tanggal_kembali'
        // )->leftJoin('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
        //     ->where('anggota.alamat', 'LIKE', '%bandung%')
        //     ->orderBy('anggota.nama', 'asc')
        //     ->get();

        // no 11
        // $member = Transaction::select(
        //     'peminjaman.id_anggota as id',
        //     'anggota.nama as nama',
        //     'anggota.sex as jk',
        //     'anggota.telp as telp',
        //     'anggota.alamat as alamat',
        //     'peminjaman.tgl_pinjam as tanggal_pinjam',
        //     'peminjaman.tgl_kembali as tanggal_kembali'
        // )->leftJoin('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
        //     ->where('anggota.alamat', 'LIKE', '%bandung%')
        //     ->orWhere('anggota.sex','P')
        //     ->orderBy('anggota.nama', 'asc')
        //     ->get();

        // no 12
        // $member = Transaction::select(
        //     'peminjaman.id_anggota as id',
        //     'anggota.nama as nama',
        //     'anggota.sex as jk',
        //     'anggota.telp as telp',
        //     'anggota.alamat as alamat',
        //     'peminjaman.tgl_pinjam as tanggal_pinjam',
        //     'peminjaman.tgl_kembali as tanggal_kembali',
        //     'detail_peminjaman.isbn as isbn',
        //     'detail_peminjaman.qty as qty',
        // )->leftJoin('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
        // ->leftJoin('detail_peminjaman','peminjaman.id_pinjam','=','detail_peminjaman.id_pinjam')
        //     ->where('detail_peminjaman.qty', '>', '1')
        //     ->orderBy('anggota.nama', 'asc')
        //     ->get();

        // no 13
        // $member = Transaction::select(
        //     array(
        //         'peminjaman.id_anggota as id',
        //         'anggota.nama as nama',
        //         'anggota.sex as jk',
        //         'anggota.telp as telp',
        //         'anggota.alamat as alamat',
        //         'buku.judul as judul_buku',
        //         'buku.harga_pinjam as harga_pinjam',
        //         'peminjaman.tgl_pinjam as tanggal_pinjam',
        //         'peminjaman.tgl_kembali as tanggal_kembali',
        //         'detail_peminjaman.isbn as isbn',
        //         'detail_peminjaman.qty as qty',
        //         DB::raw('detail_peminjaman.qty * buku.harga_pinjam as total_harga')
        //     )
        // )->join('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
        //     ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'detail_peminjaman.id_pinjam')
        //     ->join('buku', 'detail_peminjaman.isbn', '=', 'buku.isbn')
        //     ->orderBy('anggota.nama', 'asc')
        //     ->get();

        // no 14
        // $member = Member::select(
        //     'anggota.nama as nama',
        //     'anggota.telp as telp',
        //     'anggota.alamat as alamat',
        //     'peminjaman.tgl_pinjam as tanggal_pinjam',
        //     'peminjaman.tgl_kembali as tanggal_kembali',
        //     'detail_peminjaman.isbn as isbn',
        //     'detail_peminjaman.qty as qty',
        //     'buku.judul as judul_buku',
        //     'penerbit.nama_penerbit as nama_penerbit',
        //     'pengarang.nama_pengarang as nama_pengarang',
        //     'katalog.nama as nama_katalog',
        // )->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_anggota')
        //     ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'detail_peminjaman.id_pinjam')
        //     ->join('buku', 'detail_peminjaman.isbn', '=', 'buku.isbn')
        //     ->join('pengarang', 'buku.id_pengarang', '=', 'pengarang.id_pengarang')
        //     ->join('penerbit', 'buku.id_penerbit', '=', 'penerbit.id_penerbit')
        //     ->join('katalog', 'buku.id_katalog', '=', 'katalog.id_katalog')
        //     ->orderBy('anggota.nama', 'asc')
        //     ->get();

        // no 15
        // $member = Book::select(
        //     'katalog.id_katalog as id_katalog', 
        //     'katalog.nama as nama_katalog',
        //     'buku.isbn as isbn',
        //     'buku.judul as judul_buku', 
        //     'buku.tahun as tahun', 
        //     'buku.qty_stok as qty', 
        //     'buku.harga_pinjam as harga_pinjam'
        // )->join('katalog', 'buku.id_katalog', '=', 'katalog.id_katalog')
        //     ->orderBy('katalog.nama', 'asc')
        //     ->get();

        // no 16
        // $member = Book::select(
        //     'buku.isbn as isbn',
        //     'buku.judul as judul_buku', 
        //     'penerbit.nama_penerbit as nama_penerbit', 
        // )->rightJoin('penerbit', 'buku.id_penerbit', '=', 'penerbit.id_penerbit')
        //     ->orderBy('penerbit.nama_penerbit', 'asc')
        //     ->get();

        // no 17

        // $member = Book::select(array('id_pengarang as id', DB::raw('COUNT(isbn)')))
        //     ->where('id_pengarang', 'LIKE', 'PG05')
        //     ->groupBy('id_pengarang')
        //     ->orderByRaw('COUNT(isbn)')
        //     ->get();

        // no 18
        // $member = Book::select('*')->where('harga_pinjam','>','10000')
        // ->orderBy('harga_pinjam','desc')
        // ->get();

        // no 19
        // $member = Book::select('*')
        // ->where([
        //     ['id_penerbit','=','PN01'],
        //     ['qty_stok', '>', '10']
        // ])
        // ->orderBy('harga_pinjam','desc')
        // ->get();

        // no 20
        // $member = Member::select('*')->whereMonth('tgl_entry','06')
        // ->toSql();


        // return $member;

        // return view('home');
    }
}
