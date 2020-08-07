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
}
