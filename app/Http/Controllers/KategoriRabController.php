<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriRab;
use App\Proyek;

class KategoriRabController extends Controller
{
    public function index($id){
        $kategori = KategoriRab::where('id_proyek', $id)->paginate(20);
        $proyek = Proyek::findOrFail($id);

        return view('rab.kategori.index', ['kategori' => $kategori, 'proyek' => $proyek]);
    }

    public function create($id){
        $proyek = Proyek::findOrFail($id);

        return view('rab.kategori.create', ['proyek' => $proyek]);
    }

    public function store($id){
        $kategori = new KategoriRab();

        $kategori->id_proyek = request('id_proyek');
        $kategori->nama_kategori = request('uraian');
        $kategori->keterangan = request('keterangan');

        $kategori->save();

        return redirect()->action('KategoriRabController@index', ['id' => $id])->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $kategori = KategoriRab::findOrFail($id);

        return view('rab.kategori.update', ['unit' => $kategori]);
    }

    public function update($id){
        $kategori = KategoriRab::findOrFail($id);

        $kategori->id_proyek = request('id_proyek');
        $kategori->nama_kategori = request('nama');
        $kategori->keterangan = request('keterangan');
        
        $kategori->update();

        return redirect()->action('KategoriRabController@index', ['id' => $kategori->id_proyek])->with('success', 'Data Berhasil Diubah');

    }

    public function destroy($id){
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();
        
        return redirect('/rab/kategori')->with('success', 'Data Berhasil Dihapus');
    }
}
