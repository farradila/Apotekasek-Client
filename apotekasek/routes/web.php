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
    return view('home');
});

Route::get('/home', 'HomeController@index');

Route::get('/obat', 'ObatController@index');
Route::get('/obat/tambah', 'ObatController@tambah');
Route::post('/obat/add', 'ObatController@add');
Route::get('/obat/update/{kode_obat}', 'ObatController@update');
Route::post('/obat/u_process/{kode_obat}', 'ObatController@u_process');
Route::get('/obat/hapus/{kode_obat}', 'ObatController@hapus');

Route::get('/pelanggan', 'PelangganController@index');
Route::get('/pelanggan/tambah', 'pelangganController@tambah');
Route::post('/pelanggan/add', 'pelangganController@add');
Route::get('/pelanggan/update/{kode_pelanggan}', 'PelangganController@update');
Route::post('/pelanggan/u_process/{kode_pelanggan}', 'PelangganController@u_process');
Route::get('/pelanggan/hapus/{kode_pelanggan}', 'pelangganController@hapus');

Route::get('/beli', 'BeliController@index');
Route::get('/beli/tambah','BeliController@tambah');
Route::post('/beli/add', 'BeliController@add');
Route::get('/beli/update/{kode_beli}', 'BeliController@update');
Route::post('/beli/u_process/{kode_beli}', 'BeliController@u_process');
Route::get('/beli/hapus/{kode_beli}', 'BeliController@hapus');