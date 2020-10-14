<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Proyek;
use App\Persiapan;
use App\Arsitektur;
use App\Struktur;
use App\MEP;

class RekapRabController extends Controller
{
    public function index($id){
        $proyek = Proyek::findOrFail($id);

        $persiapan = DB::table('persiapan')->where('id_proyek', $id)->select(DB::raw('kategori, sum(jumlah) as jumlah'))->groupBy('kategori')->get();
        $sumper = Persiapan::where('id_proyek', $id)->sum('jumlah');

        $arsitektur = DB::table('arsitektur')->where('id_proyek', $id)->select(DB::raw('kategori, sum(jumlah) as jumlah'))->groupBy('kategori')->get();
        $sumar = Arsitektur::where('id_proyek', $id)->sum('jumlah');
        
        $struktur = DB::table('struktur')->where('id_proyek', $id)->select(DB::raw('kategori, sum(jumlah) as jumlah'))->groupBy('kategori')->get();
        $sumstr = Struktur::where('id_proyek', $id)->sum('jumlah');
        
        $mep = DB::table('mep')->where('id_proyek', $id)->select(DB::raw('kategori, sum(jumlah) as jumlah'))->groupBy('kategori')->get();
        $summep = MEP::where('id_proyek', $id)->sum('jumlah');

        return view('rab.rab', ['proyek' => $proyek, 'persiapan' => $persiapan, 'sumper' => $sumper, 'arsitektur' => $arsitektur, 'sumar' => $sumar, 'struktur' => $struktur, 'sumstr' => $sumstr, 'mep' => $mep, 'summep' => $summep]);
    }
}
