<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyek;
use App\KategoriRab;
use App\MEP;

class MepController extends Controller
{
    public function index($id){
        $mep = MEP::where('id_proyek', $id)->paginate(20);
        $proyek = Proyek::findOrFail($id);

        return view('rab.mep.index', ['mep' => $mep, 'proyek' => $proyek]);
    }

    public function create($id){
        $kategori = KategoriRab::where('id_proyek', $id)->where('keterangan', 'MEP')->get();
        $proyek = Proyek::findOrFail($id);

        return view('rab.mep.create', ['proyek' => $proyek, 'kategori' => $kategori]);
    }

    public function show($id){
        $mep = MEP::findOrFail($id);
        $proyek = Proyek::findOrFail($mep->id_proyek);

        return view('rab.mep.show', ['proyek' => $proyek, 'unit' => $mep]);
    }

    public function edit($id){
        $unit = MEP::findOrFail($id);
        $proyek = Proyek::findOrFail($unit->id_proyek);
        $kategori = KategoriRab::where('id_proyek', $unit->id_proyek )->where('keterangan', 'MEP')->get();

        return view('rab.mep.update', ['proyek' => $proyek, 'unit' => $unit, 'kategori' => $kategori]);
    }

    public function store($id){
        $mep = new MEP();

        $mep->id_proyek = request('id_proyek');
        $mep->uraian = request('uraian');
        $mep->kategori = request('kategori');
        $mep->volume = request('volume');
        $mep->satuan = request('satuan');
        $mep->harga_satuan = request('harga');
        $mep->jumlah = request('jumlah');

        $mep->save();
        
        return redirect()->action('MepController@index', ['id' => $id])->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $mep = MEP::findOrFail($id);

        $mep->delete();
        
        return redirect()->action('MepController@index', ['id' => $mep->id_proyek])->with('success', 'Data Berhasil Dihapus');
    }

    public function update($id){
        $mep = MEP::findOrFail($id);
        
        $mep->id_proyek = request('id_proyek');
        $mep->uraian = request('uraian');
        $mep->kategori = request('kategori');
        $mep->volume = request('volume');
        $mep->satuan = request('satuan');
        $mep->harga_satuan = request('harga');
        $mep->jumlah = request('jumlah');
        
        $mep->update();

        return redirect()->action('MepController@index', ['id' => $mep->id_proyek])->with('success', 'Data Berhasil Diubah');
    }

}
