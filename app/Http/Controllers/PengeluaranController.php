<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;
use App\Kategori;

class PengeluaranController extends Controller
{
    public function index(){
        // $pengeluaran = Pengeluaran::all();
        $pengeluaran = Pengeluaran::paginate(2);

        return view('pengeluaran.index', ['pengeluaran' => $pengeluaran]);
    }

    public function create(){
        $kategori = Kategori::where('keterangan', 'Pengeluaran')->get();

        return view('pengeluaran.create', ['kategori' => $kategori]);
    }

    public function show($id){
        return view('pengeluaran.show', ['id' => $id]);
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
        $pengeluaran->upload_bukti = request('bukti');

        $pengeluaran->save();
        
        return redirect('/pengeluaran');
    }
}
