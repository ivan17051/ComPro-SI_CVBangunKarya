<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;
use App\Kategori;

class PemasukanController extends Controller
{
    public function index(){
        //$pemasukan = Pemasukan::all();
        $pemasukan = Pemasukan::paginate(2);

        return view('pemasukan.index', ['pemasukan' => $pemasukan]);
    }

    public function create(){
        $kategori = Kategori::where('keterangan', 'Pemasukan')->get();

        return view('pemasukan.create', ['kategori' => $kategori]);
    }

    public function show($id){
        $unit = Pemasukan::findOrFail($id);

        return view('pemasukan.show', ['unit' => $unit]);
    }

    public function store(){
        $pemasukan = new Pemasukan();

        $pemasukan->tanggal_pemasukan = request('tanggal');
        $pemasukan->deskripsi = request('deskripsi');
        $pemasukan->kategori = request('kategori');
        $pemasukan->jumlah_pemasukan_klien = request('jumlah');
        $pemasukan->upload_bukti = request('bukti');

        $pemasukan->save();
        
        return redirect('/pemasukan');
    }
}
