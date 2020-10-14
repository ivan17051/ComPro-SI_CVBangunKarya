<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Struktur;
use App\Proyek;
use App\KategoriRab;

class StrukturController extends Controller
{
    public function index($id){
        $struktur = Struktur::where('id_proyek', $id)->paginate(20);
        $proyek = Proyek::findOrFail($id);

        return view('rab.struktur.index', ['struktur' => $struktur, 'proyek' => $proyek]);
    }

    public function create($id){
        $kategori = KategoriRab::where('id_proyek', $id)->where('keterangan', 'Struktur')->get();
        $proyek = Proyek::findOrFail($id);

        return view('rab.struktur.create', ['proyek' => $proyek, 'kategori' => $kategori]);
    }

    public function show($id){
        $struktur = Struktur::findOrFail($id);
        $proyek = Proyek::findOrFail($struktur->id_proyek);

        return view('rab.struktur.show', ['proyek' => $proyek, 'unit' => $struktur]);
    }

    public function edit($id){
        $unit = Struktur::findOrFail($id);
        $proyek = Proyek::findOrFail($unit->id_proyek);
        $kategori = KategoriRab::where('id_proyek', $unit->id_proyek )->where('keterangan', 'Struktur')->get();

        return view('rab.struktur.update', ['proyek' => $proyek, 'unit' => $unit, 'kategori' => $kategori]);
    }

    public function store($id){
        $struktur = new Struktur();
        
        $struktur->id_proyek = request('id_proyek');
        $struktur->uraian = request('uraian');
        $struktur->kategori = request('kategori');
        $struktur->volume = request('volume');
        $struktur->satuan = request('satuan');
        $struktur->harga_satuan = request('harga_satuan');
        $struktur->jumlah = request('jumlah');

        $struktur->save();
        
        return redirect()->action('StrukturController@index', ['id' => $id])->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $struktur = Struktur::findOrFail($id);

        $struktur->delete();
        
        return redirect()->action('StrukturController@index', ['id' => $struktur->id_proyek])->with('success', 'Data Berhasil Dihapus');
    }

    public function update($id){
        $struktur = Struktur::findOrFail($id);
        
        $struktur->id_proyek = request('id_proyek');
        $struktur->uraian = request('uraian');
        $struktur->kategori = request('kategori');
        $struktur->volume = request('volume');
        $struktur->satuan = request('satuan');
        $struktur->harga_satuan = request('harga');
        $struktur->jumlah = request('jumlah');
        
        $struktur->update();

        return redirect()->action('StrukturController@index', ['id' => $struktur->id])->with('success', 'Data Berhasil Diubah');
    }
}
