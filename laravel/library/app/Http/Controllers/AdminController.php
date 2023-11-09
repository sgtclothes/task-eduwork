<?php

namespace App\Http\Controllers;

use DB;
use App\Buku;
use App\Katalog;
use App\Anggota;
use App\Penerbit;
use App\Pengarang;
use App\Peminjaman;
use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Permission;

class AdminController extends Controller
{
    public function dashboard(){
        $total_anggota = Anggota::count();
        $total_buku = Buku::count();
        $total_peminjaman = Peminjaman::whereMonth('tanggal_pinjam', date('m'))->count();
        $total_penerbit = Penerbit::count();

        $data_donut = Buku::select(DB::raw("COUNT(id_penerbit) as total"))->groupBy('id_penerbit')->orderBy('id_penerbit', 'asc')->pluck('total');
        $label_donut = Penerbit::orderBy('penerbits.id', 'asc')->join('bukus','buku.id_penerbit','=','penerbits.id')->groupBy('nama_penerbit')->pluck('nama_penerbit');

        $label_bar = ['Peminjaman', 'Pengembalian'];
        $data_bar = [];

        foreach ($label as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] = $key == 0 ? 'rgba(60,141,188,0.9)' : 'rgba(210, 214, 222, 1)';
            $data_month = [];

            foreach (range(1,12) as $month) {
                if ($key == 0) {
                    $data_month[] = Peminjaman::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_pinjam', $month)->first()->total;
                } else {
                    $data_month[] = Peminjaman::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_kembali', $month)->first()->total;
                }
            }

            $data_bar[$key]['data'] = $data_month;
        }
        return view('admin.dashboard', compact('total_buku','total_anggota', 'total_peminjaman', 'total_penerbit', 'data_donut', 'label_donut', 'data_bar'));
    }

    public function katalog()
    {
        $data_katalog = Katalog::all();

        return view('admin.katalog.katalog', compact('data_katalog'));
    }
    public function penerbit()
    {
        return view('admin.penerbit');
    }
    public function pengarang()
    {
        $data_pengarang = Pengarang::all();

        return view('admin.pengarang', compact('data_pengarang'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function test_spatie()
    {
        $role = Role::create(['name' => 'petugas']);
        $permission = Permission::create(['name' => 'index peminjaman']);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        // $user = auth()->user();
        // $user->assignRole('petugas');

        // $user = user::with('roles')->get();
        // return $user;

        // $user = auth()->user();
        // $user->removeRole('petugas');
    }
}

