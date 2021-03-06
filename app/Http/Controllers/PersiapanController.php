<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persiapan;
use App\Proyek;
use App\KategoriRab;

class PersiapanController extends Controller
{
    public function index($id){
        $persiapan = Persiapan::where('id_proyek', $id)->paginate(20);
        $proyek = Proyek::findOrFail($id);

        return view('rab.persiapan.index', ['persiapan' => $persiapan, 'proyek' => $proyek]);
    }

    public function create($id){
        $kategori = KategoriRab::where('id_proyek', $id)->where('keterangan', 'Persiapan')->get();
        $proyek = Proyek::findOrFail($id);

        return view('rab.persiapan.create', ['proyek' => $proyek, 'kategori' => $kategori]);
    }

    public function show($id){
        $persiapan = Persiapan::findOrFail($id);
        $proyek = Proyek::findOrFail($persiapan->id_proyek);

        return view('rab.persiapan.show', ['proyek' => $proyek, 'unit' => $persiapan]);
    }

    public function edit($id){
        $unit = Persiapan::findOrFail($id);
        $kategori = KategoriRab::where('id_proyek', $unit->id_proyek )->where('keterangan', 'Persiapan')->get();
        $proyek = Proyek::findOrFail($unit->id_proyek);

        return view('rab.persiapan.update', ['proyek' => $proyek, 'unit' => $unit, 'kategori' => $kategori]);
    }

    public function store($id){
        $persiapan = new Persiapan();

        $persiapan->id_proyek = request('id_proyek');
        $persiapan->uraian = request('uraian');
        $persiapan->kategori = request('kategori');
        $persiapan->volume = request('volume');
        $persiapan->satuan = request('satuan');
        $persiapan->harga_satuan = request('harga');
        $persiapan->jumlah = request('jumlah');

        $persiapan->save();
        
        return redirect()->action('PersiapanController@index', ['id' => $id])->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $persiapan = Persiapan::findOrFail($id);

        $persiapan->delete();
        
        return redirect()->action('PersiapanController@index', ['id' => $persiapan->id_proyek])->with('success', 'Data Berhasil Dihapus');
    }

    public function update($id){
        $persiapan = Persiapan::findOrFail($id);
        
        $persiapan->id_proyek = request('id_proyek');
        $persiapan->uraian = request('uraian');
        $persiapan->kategori = request('kategori');
        $persiapan->volume = request('volume');
        $persiapan->satuan = request('satuan');
        $persiapan->harga_satuan = request('harga');
        $persiapan->jumlah = request('jumlah');
        
        $persiapan->update();

        return redirect()->action('PersiapanController@index', ['id' => $persiapan->id_proyek])->with('success', 'Data Berhasil Diubah');
    }
}
