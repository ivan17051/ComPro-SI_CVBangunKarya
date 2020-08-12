<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RAB;

class RabController extends Controller
{
    public function index(){
        $proyek = RAB::paginate(20);

        return view('rab.index', ['proyek' => $proyek]);
    }

    public function create(){
        return view('rab.create');
    }

    public function show($id){
        $proyek = RAB::findOrFail($id);

        return view('rab.show', ['proyek' => $proyek]);
    }

    public function store(){
        $proyek = new RAB();

        $proyek->nama_proyek = request('nama_proyek');
        $proyek->lokasi = request('lokasi');
        $proyek->total = request('total');

        $proyek->save();
        
        return redirect('/rab')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $proyek = RAB::findOrFail($id);

        return view('rab.update', ['unit' => $proyek]);
    }

    public function update($id){
        $proyek = RAB::findOrFail($id);        

        $proyek->nama_proyek = request('nama_proyek');
        $proyek->lokasi = request('lokasi');
        $proyek->total = request('total');
        
        $proyek->update();

        return redirect('/rab')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id){
        $proyek = RAB::findOrFail($id);

        $proyek->delete();
        
        return redirect('/rab')->with('success', 'Data Berhasil Dihapus');
    }
}
