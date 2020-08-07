<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persiapan;
use App\RAB;

class PersiapanController extends Controller
{
    public function index($id){
        $persiapan = Persiapan::where('id_proyek', $id)->paginate(20);
        $proyek = RAB::findOrFail($id);

        return view('rab.persiapan.index', ['persiapan' => $persiapan, 'proyek' => $proyek]);
    }
}
