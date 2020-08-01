<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index(){
        //$pemasukan = Pemasukan::all();
        $kategori = Kategori::paginate(10);

        return view('kategori.index', ['kategori' => $kategori]);
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(){
        $kategori = new Kategori();

        $kategori->nama_kategori = request('nama');
        $kategori->keterangan = request('keterangan');

        $kategori->save();

        return redirect('/kategori');
    }
}
