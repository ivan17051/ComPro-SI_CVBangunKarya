<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arsitektur;
use App\RAB;
use App\KategoriRab;

class ArsitekturController extends Controller
{
    public function index($id){
        $arsitektur = Arsitektur::where('id_arsitektur', $id)->paginate(20);
        $proyek = RAB::findOrFail($id);

        return view('rab.arsitektur.index', ['arsitektur' => $arsitektur, 'proyek' => $proyek]);
    }

    public function create($id){
        $kategori = KategoriRab::where('id_proyek', $id)->where('keterangan', 'arsitektur')->get();
        $proyek = Rab::findOrFail($id);

        return view('rab.arsitektur.create', ['proyek' => $proyek, 'kategori' => $kategori]);
    }

    public function show($id){
        $arsitektur = Arsitektur::findOrFail($id);

        return view('rab.arsitektur.show', ['unit' => $arsitektur]);
    }

    public function edit($id){
        $unit = arsitektur::findOrFail($id);
        $kategori = KategoriRab::where('id_proyek', $unit->id_proyek )->where('keterangan', 'Arsitektur')->get();

        return view('rab.arsitektur.update', ['unit' => $unit, 'kategori' => $kategori]);
    }

    public function store($id){
        $arsitektur = new Arsitektur();

        $arsitektur->id_arsitektur = request('id_arsitektur');
        $arsitektur->uraian = request('uraian');
        $arsitektur->kategori = request('kategori');
        $arsitektur->volume = request('volume');
        $arsitektur->satuan = request('satuan');
        $arsitektur->harga_satuan = request('harga');
        $arsitektur->jumlah = request('jumlah');

        $arsitektur->save();
        
        return redirect()->action('ArsitekturController@index', ['id' => $id])->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $arsitektur = Arsitektur::findOrFail($id);

        $arsitektur->delete();
        
        return redirect()->action('ArsitekturController@index', ['id' => $arsitektur->id_arsitektur])->with('success', 'Data Berhasil Dihapus');
    }

    public function update($id){
        $arsitektur = Arsitektur::findOrFail($id);
        
        $arsitektur->id_proyek = request('id_proyek');
        $arsitektur->uraian = request('uraian');
        $arsitektur->kategori = request('kategori');
        $arsitektur->volume = request('volume');
        $arsitektur->satuan = request('satuan');
        $arsitektur->harga_satuan = request('harga');
        $arsitektur->jumlah = request('jumlah');
        
        $arsitektur->update();

        return redirect()->action('ArsitekturController@index', ['id' => $arsitektur->id_proyek])->with('success', 'Data Berhasil Diubah');
    }
}
