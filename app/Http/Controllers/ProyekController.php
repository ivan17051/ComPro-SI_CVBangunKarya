<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Proyek;
use App\Kategori;
use App\Pemasukan;
use App\Pengeluaran;
use App\KategoriRab;
use App\Persiapan;
use App\Arsitektur;
use App\Struktur;
use App\MEP;

class ProyekController extends Controller
{
    public function index(){
        $proyek = Proyek::paginate(20);
        
        // $sumper = Persiapan::where('id_proyek', $id)->sum('jumlah');
        $sumper = DB::table('persiapan')->select(DB::raw('id_proyek, sum(jumlah) as jum'))->groupBy('id_proyek')->get();
        // $sumar = Arsitektur::where('id_proyek', $id)->sum('jumlah');
        $sumar = DB::table('arsitektur')->select(DB::raw('id_proyek, sum(jumlah) as jum'))->groupBy('id_proyek')->get();
        // $sumstr = Struktur::where('id_proyek', $id)->sum('jumlah');
        $sumstr = DB::table('struktur')->select(DB::raw('id_proyek, sum(jumlah) as jum'))->groupBy('id_proyek')->get();
        // $summep = MEP::where('id_proyek', $id)->sum('jumlah');
        $summep = DB::table('mep')->select(DB::raw('id_proyek, sum(jumlah) as jum'))->groupBy('id_proyek')->get();
        
        // $pengeluaran = Pengeluaran::where('id_proyek', $id)->sum('jumlah');
        $pengeluaran = DB::table('pengeluaran')->select(DB::raw('id_proyek, sum(jumlah) as jum'))->groupBy('id_proyek')->get();
        // $total = round($pengeluaran/($sumper + $sumar + $sumstr + $summep) * 100);
        
        return view('proyek', ['proyek' => $proyek, 'sumper' => $sumper, 'sumar' => $sumar, 'sumstr' => $sumstr, 'summep' => $summep, 'pengeluaran' => $pengeluaran]);
    }

    public function create(){
        return view('create');
    }

    public function show($id){
        //
    }

    public function store(){
        $proyek = new Proyek();

        $proyek->nama_proyek = request('nama_proyek');
        $proyek->lokasi = request('lokasi');
        $proyek->no_hp = request('hp_klien');
        $proyek->email_klien = request('email_klien');
        $proyek->tgl_mulai = request('tgl_mulai');
        $proyek->tgl_selesai = request('tgl_selesai');

        $proyek->save();
        
        return redirect('/proyek')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $proyek = Proyek::findOrFail($id);

        return view('update', ['unit' => $proyek]);
    }

    public function update($id){
        $proyek = Proyek::findOrFail($id);        

        $proyek->nama_proyek = request('nama_proyek');
        $proyek->lokasi = request('lokasi');
        $proyek->no_hp = request('hp_klien');
        $proyek->email_klien = request('email_klien');
        $proyek->tgl_mulai = request('tgl_mulai');
        $proyek->tgl_selesai = request('tgl_selesai');
        
        $proyek->update();

        return redirect('/proyek')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id){
        $proyek = Proyek::findOrFail($id);
        $kategori = Kategori::where('id_proyek', $id);
        $pemasukan = Pemasukan::where('id_proyek', $id);
        $pengeluaran = Pengeluaran::where('id_proyek', $id);
        $kategorirab = KategoriRab::where('id_proyek', $id);
        $persiapan = Persiapan::where('id_proyek', $id);
        $arsitektur = Arsitektur::where('id_proyek', $id);
        $struktur = Struktur::where('id_proyek', $id);
        $mep = MEP::where('id_proyek', $id);

        $proyek->delete();
        $kategori->delete();
        $pemasukan->delete();
        $pengeluaran->delete();
        $kategorirab->delete();
        $persiapan->delete();
        $arsitektur->delete();
        $struktur->delete();
        $mep->delete();
        
        return redirect('/proyek')->with('success', 'Data Berhasil Dihapus');
    }
}
