<?php

use RealRashid\SweetAlert\Facades\Alert;
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
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/proyek', 'ProyekController@index');
Route::get('/proyek/create', 'ProyekController@create');
Route::post('/proyek/create', 'ProyekController@store');
Route::get('/proyek/{id}', 'ProyekController@show');
Route::get('/proyek/edit/{id}', 'ProyekController@edit');
Route::post('/proyek/edit/{id}', 'ProyekController@update');
Route::delete('/proyek/{id}', 'ProyekController@destroy');

//==============Neraca================

Route::get('/neraca/{id}', 'NeracaController@index');

Route::get('/neraca/{id}/kategori', 'KategoriController@index');
Route::get('/neraca/{id}/kategori/create', 'KategoriController@create');
Route::post('/neraca/{id}/kategori/create', 'KategoriController@store');
Route::get('/neraca/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/neraca/kategori/edit/{id}', 'KategoriController@update');
Route::delete('/neraca/kategori/{id}', 'KategoriController@destroy');

Route::get('/neraca/{id}/pemasukan', 'PemasukanController@index');
Route::get('/neraca/{id}/pemasukan/create', 'PemasukanController@create');
Route::post('/neraca/{id}/pemasukan/create', 'PemasukanController@store');
Route::get('/neraca/pemasukan/{id}', 'PemasukanController@show');
Route::get('/neraca/pemasukan/edit/{id}', 'PemasukanController@edit');
Route::post('/neraca/pemasukan/edit/{id}', 'PemasukanController@update');
Route::delete('/neraca/pemasukan/{id}', 'PemasukanController@destroy');

Route::get('/neraca/{id}/pengeluaran', 'PengeluaranController@index');
Route::get('/neraca/{id}/pengeluaran/create', 'PengeluaranController@create');
Route::post('/neraca/{id}/pengeluaran/create', 'PengeluaranController@store');
Route::get('/neraca/pengeluaran/{id}', 'PengeluaranController@show');
Route::get('/neraca/pengeluaran/edit/{id}', 'PengeluaranController@edit');
Route::post('/neraca/pengeluaran/edit/{id}', 'PengeluaranController@update');
Route::delete('/neraca/pengeluaran/{id}', 'PengeluaranController@destroy');

//==============RAB================

Route::get('/rab/{id}', 'RabController@index');

Route::get('/rab/{id}/kategori', 'KategoriRabController@index');
Route::get('/rab/{id}/kategori/create', 'KategoriRabController@create');
Route::post('/rab/{id}/kategori/create', 'KategoriRabController@store');
Route::get('/rab/kategori/edit/{id}', 'KategoriRabController@edit');
Route::post('/rab/kategori/edit/{id}', 'KategoriRabController@update');
Route::delete('/rab/kategori/{id}', 'KategoriRabController@destroy');

Route::get('/rab/{id}/persiapan', 'PersiapanController@index');
Route::get('/rab/{id}/persiapan/create', 'PersiapanController@create');
Route::post('/rab/{id}/persiapan/create', 'PersiapanController@store');
Route::get('/rab/persiapan/{id}', 'PersiapanController@show');
Route::get('/rab/persiapan/edit/{id}', 'PersiapanController@edit');
Route::post('/rab/persiapan/edit/{id}', 'PersiapanController@update');
Route::delete('/rab/persiapan/{id}', 'PersiapanController@destroy');

Route::get('/rab/{id}/mep', 'MepController@index');
Route::get('/rab/{id}/mep/create', 'MepController@create');
Route::post('/rab/{id}/mep/create', 'MepController@store');
Route::get('/rab/mep/{id}', 'MepController@show');
Route::get('/rab/mep/edit/{id}', 'MepController@edit');
Route::post('/rab/mep/edit/{id}', 'MepController@update');
Route::delete('/rab/mep/{id}', 'MepController@destroy');