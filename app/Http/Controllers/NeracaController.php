<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Pemasukan;
use App\Pengeluaran;

class NeracaController extends Controller
{
    public function index(){
        
        $pemasukan = DB::table('pemasukan')->select(DB::raw('kategori, sum(jumlah_pemasukan_klien) as jumlah'))->groupBy('kategori')->get();
        // $pemasukan = Pemasukan::all()->groupBy('kategori')->map(function ($row){
        //     return $row->sum('jumlah_pemasukan_klien');
        // });
        $sum1 = Pemasukan::sum('jumlah_pemasukan_klien');

        $pengeluaran = DB::table('pengeluaran')->select(DB::raw('kategori, sum(jumlah) as jumlah'))->groupBy('kategori')->get();
        // $pengeluaran = Pengeluaran::all()->groupBy('kategori')->map(function ($row){
        //     return $row->sum('jumlah');
        // });
        $sum2 = Pengeluaran::sum('jumlah');

        return view('neraca', ['pemasukan' => $pemasukan, 'pengeluaran' => $pengeluaran, 'sum1' => $sum1, 'sum2' => $sum2]);
    }
}
