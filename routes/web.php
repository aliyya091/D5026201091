<?php

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
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugas4js');
});

Route::get('praktikum2', function () {
    return view('praktikum2form');
});

//melalui controller
Route::get('ets2021',"ViewController@showETS") ;

Route::get('greetings',"ViewController@showGreetings") ;
Route::post('sayhi',"ViewController@sayHi") ;

//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');

//route week 13
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route praktikum
Route::get('/praktikum','PraktikumController@index');
Route::get('/praktikum/tambah','PraktikumController@tambah');
Route::post('/praktikum/store','PraktikumController@store');
Route::get('/praktikum/edit/{id}','PraktikumController@edit');
Route::post('/praktikum/update','PraktikumController@update');
Route::get('/praktikum/hapus/{id}','PraktikumController@hapus');
Route::get('/praktikum/cari','PraktikumController@cari');

//route EAS Kode E5
//route praktikum
Route::get('/nilaikuliah','NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah','NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','NilaiKuliahController@store');
