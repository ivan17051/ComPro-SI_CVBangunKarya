<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Proyek;
use App\Pemasukan;
use App\Pengeluaran;

class NeracaController extends Controller
{
    public function index($id){
        $proyek = Proyek::findOrFail($id);

        $pemasukan = DB::table('pemasukan')->where('id_proyek', $id)->select(DB::raw('kategori, sum(jumlah_pemasukan_klien) as jumlah'))->groupBy('kategori')->get();
        // $pemasukan = Pemasukan::all()->groupBy('kategori')->map(function ($row){
        //     return $row->sum('jumlah_pemasukan_klien');
        // });
        $sum1 = Pemasukan::where('id_proyek', $id)->sum('jumlah_pemasukan_klien');

        $pengeluaran = DB::table('pengeluaran')->where('id_proyek', $id)->select(DB::raw('kategori, sum(jumlah) as jumlah'))->groupBy('kategori')->get();
        // $pengeluaran = Pengeluaran::all()->groupBy('kategori')->map(function ($row){
        //     return $row->sum('jumlah');
        // });
        $sum2 = Pengeluaran::where('id_proyek', $id)->sum('jumlah');

        return view('neraca.neraca', ['proyek' => $proyek, 'pemasukan' => $pemasukan, 'pengeluaran' => $pengeluaran, 'sum1' => $sum1, 'sum2' => $sum2]);
    }
}
