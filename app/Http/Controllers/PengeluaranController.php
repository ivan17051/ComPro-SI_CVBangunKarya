<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;
use App\Kategori;

class PengeluaranController extends Controller
{
    public function index(){
        // $pengeluaran = Pengeluaran::all();
        $pengeluaran = Pengeluaran::paginate(20);

        return view('pengeluaran.index', ['pengeluaran' => $pengeluaran]);
    }

    public function create(){
        $kategori = Kategori::where('keterangan', 'Pengeluaran')->get();

        return view('pengeluaran.create', ['kategori' => $kategori]);
    }

    public function show($id){
        $unit = Pengeluaran::findOrFail($id);

        return view('pengeluaran.show', ['unit' => $unit]);
    }

    public function edit($id){
        $unit = Pengeluaran::findOrFail($id);
        $kategori = Kategori::where('keterangan', 'Pengeluaran')->get();

        return view('pengeluaran.update', ['unit' => $unit, 'kategori' => $kategori]);
    }

    public function store(){
        $pengeluaran = new Pengeluaran();

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
        
        return redirect('/pengeluaran')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id){
        $pengeluaran = Pengeluaran::findOrFail($id);

        $pengeluaran->delete();
        
        return redirect('/pengeluaran')->with('success', 'Data Berhasil Dihapus');
    }

    public function update($id){
        $pengeluaran = Pengeluaran::findOrFail($id);
        $kategori = Kategori::where('keterangan', 'Pengeluaran')->get();

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

        return redirect('/pengeluaran')->with('success', 'Data Berhasil Diubah');
    }
}
