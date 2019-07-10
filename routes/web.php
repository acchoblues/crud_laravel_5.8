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

//menampilkan data karyawan
Route::get('/karyawan','KaryawanController@index');
//menampilkan form tambah karyawan
Route::get('/karyawan/tambah','KaryawanController@tambah');
//menambah data karyawan
Route::post('/karyawan/store','KaryawanController@store');
//Menampilkan data edit karyawan
Route::get('/karyawan/edit/{nik}','KaryawanController@edit');
//update data edit karyawan
Route::post('/karyawan/update','KaryawanController@update');
//hapus data karyawan
Route::get('/karyawan/hapus/{nik}','KaryawanController@hapus');
//pencarian data karyawan
Route::get('/karyawan/cari','KaryawanController@cari');

Route::get('/link1', function () {
    return view('welcome');
});

Route::get('/link2', function () {
    return view('');
});
