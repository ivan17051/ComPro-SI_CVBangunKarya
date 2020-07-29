<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;

class PengeluaranController extends Controller
{
    public function index(){
        // $pengeluaran = Pengeluaran::all();
        $pengeluaran = Pengeluaran::paginate(2);

        return view('pengeluaran.index', ['pengeluaran' => $pengeluaran]);
    }

    public function create(){
        return view('pengeluaran.create');
    }

    public function show($id){
        return view('pengeluaran.show', ['id' => $id]);
    }
}
