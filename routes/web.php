<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/coba', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/si', function () {
    return view('neraca');
});

Route::get('/pemasukan', 'PemasukanController@index');
Route::get('/pemasukan/create', 'PemasukanController@create');
Route::get('/pemasukan/{id}', 'PemasukanController@show');

Route::get('/pengeluaran', 'PengeluaranController@index');
Route::get('/pengeluaran/create', 'PengeluaranController@create');
Route::get('/pengeluaran/{id}', 'PengeluaranController@show');
