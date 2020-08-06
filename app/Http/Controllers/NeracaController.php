<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Pemasukan;
use App\Pengeluaran;

class NeracaController extends Controller
{
    public function index(){
        $pemasukan = Pemasukan::all();
        // $pemasukan = Pemasukan::groupBy('kategori')->sum('jumlah_pemasukan_klien')->get();
        $kategori1 = Pemasukan::groupBy('kategori')->get();
        $pemasukanm = collect($pemasukan)->groupBy('kategori')->map(function ($row){
            return $row->sum('jumlah_pemasukan_klien');
        });
        $pengeluaran = Pengeluaran::all();
        $pengeluaranm = collect($pengeluaran)->groupBy('kategori')->map(function ($row){
            return $row->sum('jumlah');
        });

        return view('neraca', ['pemasukan' => $pemasukanm, 'pengeluaran' => $pengeluaranm]);
    }
}
