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

Route::get('/', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/si', 'NeracaController@index');

Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/create', 'KategoriController@create');
Route::post('/kategori', 'KategoriController@store');
Route::get('/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/kategori/edit/{id}', 'KategoriController@update');
Route::delete('/kategori/{id}', 'KategoriController@destroy');

Route::get('/pemasukan', 'PemasukanController@index');
Route::get('/pemasukan/create', 'PemasukanController@create');
Route::post('/pemasukan', 'PemasukanController@store');
Route::get('/pemasukan/{id}', 'PemasukanController@show');
Route::get('/pemasukan/edit/{id}', 'PemasukanController@edit');
Route::post('/pemasukan/edit/{id}', 'PemasukanController@update');
Route::delete('/pemasukan/{id}', 'PemasukanController@destroy');

Route::get('/pengeluaran', 'PengeluaranController@index');
Route::get('/pengeluaran/create', 'PengeluaranController@create');
Route::post('/pengeluaran', 'PengeluaranController@store');
Route::get('/pengeluaran/{id}', 'PengeluaranController@show');
Route::get('/pengeluaran/edit/{id}', 'PengeluaranController@edit');
Route::post('/pengeluaran/edit/{id}', 'PengeluaranController@update');
Route::delete('/pengeluaran/{id}', 'PengeluaranController@destroy');
