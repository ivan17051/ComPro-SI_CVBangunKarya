<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;
use App\Kategori;
use App\Proyek;

class PemasukanController extends Controller
{
    public function index($id){
        $proyek = Proyek::findOrFail($id);
        $pemasukan = Pemasukan::where('id_proyek', $id)->paginate(20);

        return view('neraca.pemasukan.index', ['proyek' => $proyek, 'pemasukan' => $pemasukan]);
    }

    public function create($id){
        $proyek = Proyek::findOrFail($id);
        $kategori = Kategori::where('id_proyek', $id)->where('keterangan', 'Pemasukan')->get();

        return view('neraca.pemasukan.create', ['proyek' => $proyek, 'kategori' => $kategori]);
    }

    public function show($id){
        $unit = Pemasukan::findOrFail($id);
        $proyek = Proyek::findOrFail($unit->id_proyek);

        return view('neraca.pemasukan.show', ['proyek' => $proyek, 'unit' => $unit]);
    }

    public function edit($id){
        $unit = Pemasukan::findOrFail($id);
        $kategori = Kategori::where('id_proyek', $unit->id_proyek)->where('keterangan', 'Pemasukan')->get();
        $proyek = Proyek::findOrFail($unit->id_proyek);

        return view('neraca.pemasukan.update', ['proyek' => $proyek, 'unit' => $unit, 'kategori' => $kategori]);
    }

    public function store(){
        $pemasukan = new Pemasukan();

        $pemasukan->id_proyek = request('id_proyek');
        $pemasukan->tanggal_pemasukan = request('tanggal');
        $pemasukan->deskripsi = request('deskripsi');
        $pemasukan->kategori = request('kategori');
        $pemasukan->jumlah_pemasukan_klien = request('jumlah');
        $image = request()->file('bukti');
        if($image){
            $image_name = now(+7)->format('d-m-Y_H.i.s');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'_pemasukan.'.$ext;
            $upload_path = 'media/pemasukan/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $pemasukan->upload_bukti = $image_url;
        }

        $pemasukan->save();
        
        return redirect()->action('PemasukanController@index', ['id' => $pemasukan->id_proyek])->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $pemasukan = Pemasukan::findOrFail($id);

        if(\File::exists(public_path($pemasukan->upload_bukti))){
            \File::delete(public_path($pemasukan->upload_bukti));
        }
        else{
            dd('File does not exists.');
        }
        $pemasukan->delete();
        
        return redirect()->action('PemasukanController@index', ['id' => $pemasukan->id_proyek])->with('success', 'Data Berhasil Dihapus');
    }

    public function update($id){
        $pemasukan = Pemasukan::findOrFail($id);
        $kategori = Kategori::where('keterangan', 'Pemasukan')->get();

        $pemasukan->id_proyek = request('id_proyek');
        $pemasukan->tanggal_pemasukan = request('tanggal');
        $pemasukan->deskripsi = request('deskripsi');
        $pemasukan->kategori = request('kategori');
        $pemasukan->jumlah_pemasukan_klien = request('jumlah');
        $image = request()->file('bukti');
        if($image){
            $image_name = now(+7)->format('d-m-Y_H.i.s');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'_pemasukan.'.$ext;
            $upload_path = 'media/pemasukan/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $pemasukan->upload_bukti = $image_url;
        }
        $pemasukan->update();
        
        return redirect()->action('PemasukanController@index', ['id' => $pemasukan->id_proyek])->with('success', 'Data Berhasil Diubah');
    }
}
