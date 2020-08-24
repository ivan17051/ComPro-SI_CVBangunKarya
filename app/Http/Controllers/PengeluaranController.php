<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Pengeluaran;
use App\Kategori;
use App\Proyek;

class PengeluaranController extends Controller
{
    public function index($id){
        $pengeluaran = Pengeluaran::where('id_proyek', $id)->paginate(20);

        return view('neraca.pengeluaran.index', ['proyek' => $id, 'pengeluaran' => $pengeluaran]);
    }

    public function create($id){
        $kategori = Kategori::where('id_proyek', $id)->where('keterangan', 'Pengeluaran')->get();

        return view('neraca.pengeluaran.create', ['proyek' => $id, 'kategori' => $kategori]);
    }

    public function show($id){
        $unit = Pengeluaran::findOrFail($id);

        return view('neraca.pengeluaran.show', ['unit' => $unit]);
    }

    public function edit($id){
        $unit = Pengeluaran::findOrFail($id);
        $kategori = Kategori::where('keterangan', 'Pengeluaran')->get();

        return view('neraca.pengeluaran.update', ['unit' => $unit, 'kategori' => $kategori]);
    }

    public function store(){
        $pengeluaran = new Pengeluaran();

        $pengeluaran->id_proyek = request('id_proyek');
        $pengeluaran->tanggal_belanja = request('tanggal');
        $pengeluaran->list_belanja = request('nama_barang');
        $pengeluaran->deskripsi = request('deskripsi');
        $pengeluaran->kategori = request('kategori');
        $pengeluaran->jumlah_barang = request('qty');
        $pengeluaran->harga_satuan = request('harga');
        $pengeluaran->jumlah = request('jumlah');
        $pengeluaran->nama_toko = request('toko');
        $image = request()->file('bukti');
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'_pengeluaran.'.$ext;
            $upload_path = 'media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $pengeluaran->upload_bukti = $image_url;
        }

        $pengeluaran->save();
        
        return redirect()->action('PengeluaranController@index', ['id' => $pengeluaran->id_proyek])->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $pengeluaran = Pengeluaran::findOrFail($id);

        Storage::delete('public/media/130820_pengeluaran.png');
        $pengeluaran->delete();
        
        return redirect()->action('PengeluaranController@index', ['id' => $pengeluaran->id_proyek])->with('success', 'Data Berhasil Dihapus');
    }

    public function update($id){
        $pengeluaran = Pengeluaran::findOrFail($id);
        $kategori = Kategori::where('keterangan', 'Pengeluaran')->get();

        $pengeluaran->id_proyek = request('id_proyek');
        $pengeluaran->tanggal_belanja = request('tanggal');
        $pengeluaran->list_belanja = request('nama_barang');
        $pengeluaran->deskripsi = request('deskripsi');
        $pengeluaran->kategori = request('kategori');
        $pengeluaran->jumlah_barang = request('qty');
        $pengeluaran->harga_satuan = request('harga');
        $pengeluaran->jumlah = request('jumlah');
        $pengeluaran->nama_toko = request('toko');
        $image = request()->file('bukti');
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'_pengeluaran.'.$ext;
            $upload_path = 'media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $pengeluaran->upload_bukti = $image_url;
        }
        $pengeluaran->update();

        return redirect()->action('PengeluaranController@index', ['id' => $pengeluaran->id_proyek])->with('success', 'Data Berhasil Diubah');
    }
}
