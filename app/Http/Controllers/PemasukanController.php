<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;
use App\Kategori;

class PemasukanController extends Controller
{
    public function index(){
        //$pemasukan = Pemasukan::all();
        $pemasukan = Pemasukan::paginate(20);

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

    public function edit($id){
        $unit = Pemasukan::findOrFail($id);
        $kategori = Kategori::where('keterangan', 'Pemasukan')->get();

        return view('pemasukan.update', ['unit' => $unit, 'kategori' => $kategori]);
    }

    public function store(){
        $pemasukan = new Pemasukan();

        $pemasukan->tanggal_pemasukan = request('tanggal');
        $pemasukan->deskripsi = request('deskripsi');
        $pemasukan->kategori = request('kategori');
        $pemasukan->jumlah_pemasukan_klien = request('jumlah');
        $image = request()->file('bukti');
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'_pemasukan.'.$ext;
            $upload_path = 'media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $pemasukan->upload_bukti = $image_url;
        }

        $pemasukan->save();
        
        return redirect('/pemasukan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $pemasukan = Pemasukan::findOrFail($id);

        $pemasukan->delete();
        
        return redirect('/pemasukan')->with('success', 'Data Berhasil Dihapus');
    }

    public function update($id){
        $pemasukan = Pemasukan::findOrFail($id);
        $kategori = Kategori::where('keterangan', 'Pemasukan')->get();

        $pemasukan->tanggal_pemasukan = request('tanggal');
        $pemasukan->deskripsi = request('deskripsi');
        $pemasukan->kategori = request('kategori');
        $pemasukan->jumlah_pemasukan_klien = request('jumlah');
        $image = request()->file('bukti');
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'_pemasukan.'.$ext;
            $upload_path = 'media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $pemasukan->upload_bukti = $image_url;
        }
        $pemasukan->update();

        return redirect('/pemasukan')->with('success', 'Data Berhasil Diubah');
    }
}
