<?php
 
namespace App\Http\Controllers;
 
use App\Models\Pelanggan;
use Illuminate\View\View;
 
class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::select('*')->get()->toArray();
        return view('home', [
            'apotek' => 'Apotek',
            'pelanggan' => $pelanggan
        ]);
        // return 'Hello World';
    }
    public function about()
    {
        // return view('about', ['Data' => 'Ini Halaman About Indonesia']);
        // return 'Hello World';
        return [
            'hello' => 'world'
        ];
    }

}