<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->paginate(10);
        //$karyawan = DB::table('karyawan')->get;
 
    	// mengirim data karyawan ke view index
    	return view('index',['karyawan' => $karyawan]);
 
    }

        // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {
 
	// memanggil view tambah
	return view('tambah');
 
    }

    public function store(Request $request)
    {
	// insert data ke table karyawan
	DB::table('karyawan')->insert([
		'nik' => $request->nik,
		'nama' => $request->nama,
		'departemen' => $request->departemen,
        'jabatan' => $request->jabatan,
        'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
 
    }

    public function edit($nik)
    {
	// mengambil data karyawan berdasarkan id yang dipilih
	$karyawan = DB::table('karyawan')->where('nik',$nik)->get();
	// passing data karyawan yang didapat ke view edit.blade.php
	return view('edit',['karyawan' => $karyawan]);
 
    }

    // update data karyawan
    public function update(Request $request)
    {
	DB::table('karyawan')->where('nik',$request->nik)->update([
		'nama' => $request->nama,
		'departemen' => $request->departemen,
		'jabatan' => $request->jabatan,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
    }

    // Hapus data karyawan
    public function hapus($nik)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan')->where('nik',$nik)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
    }

    public function cari(Request $request)
{
	// menangkap data pencarian
	$cari = $request->cari;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$karyawan = DB::table('karyawan')
	->where('nama','like',"%".$cari."%")
	->paginate();
 
    	// mengirim data pegawai ke view index
	return view('index',['karyawan' => $karyawan]);
 
}
}
