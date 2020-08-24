<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Proyek;

class KategoriController extends Controller
{
    public function index($id){
        $kategori = Kategori::where('id_proyek', $id)->paginate(20);
        $proyek = Proyek::findOrFail($id);

        return view('neraca.kategori.index', ['kategori' => $kategori, 'proyek' => $proyek]);
    }

    public function create($id){
        $proyek = Proyek::findOrFail($id);
        
        return view('neraca.kategori.create', ['proyek' => $proyek]);
    }

    public function store($id){
        $kategori = new Kategori();
        
        $kategori->id_proyek = request('id_proyek');
        $kategori->nama_kategori = request('nama');
        $kategori->keterangan = request('keterangan');

        $kategori->save();

        return redirect()->action('KategoriController@index', ['id' => $id])->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $kategori = Kategori::findOrFail($id);

        return view('neraca.kategori.update', ['unit' => $kategori]);
    }

    public function update($id){
        $kategori = Kategori::findOrFail($id);

        $kategori->id_proyek = request('id_proyek');
        $kategori->nama_kategori = request('nama');
        $kategori->keterangan = request('keterangan');
        
        $kategori->update();

        return redirect()->action('KategoriController@index', ['id' => $kategori->id_proyek])->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id){
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();
        
        return redirect()->action('KategoriController@index', ['id' => $kategori->id_proyek])->with('success', 'Data Berhasil Dihapus');
    }
}
