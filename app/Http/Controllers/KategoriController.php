<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index(){
        //$pemasukan = Pemasukan::all();
        $kategori = Kategori::paginate(20);

        return view('kategori.index', ['kategori' => $kategori]);
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(){
        $kategori = new Kategori();

        $kategori->nama_kategori = request('nama');
        $kategori->keterangan = request('keterangan');

        $kategori->save();

        return redirect('/kategori')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $kategori = Kategori::findOrFail($id);

        return view('kategori.update', ['unit' => $kategori]);
    }

    public function update($id){
        $kategori = Kategori::findOrFail($id);

        $kategori->nama_kategori = request('nama');
        $kategori->keterangan = request('keterangan');
        
        $kategori->update();

        return redirect('/kategori')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id){
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();
        
        return redirect('/kategori')->with('success', 'Data Berhasil Dihapus');
    }
}
