<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;

class PemasukanController extends Controller
{
    public function index(){
        //$pemasukan = Pemasukan::all();
        $pemasukan = Pemasukan::paginate(2);

        return view('pemasukan.index', ['pemasukan' => $pemasukan]);
    }

    public function create(){
        return view('pemasukan.create');
    }

    public function show($id){
        $unit = Pemasukan::findOrFail($id);

        return view('pemasukan.show', ['unit' => $unit]);
    }
}
