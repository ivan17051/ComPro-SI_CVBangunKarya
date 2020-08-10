<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriRab;

class KategoriRabController extends Controller
{
    public function index(){
        return view('rab.index');
    }
}
