@extends('layout')

@section('content')
    <br/>
	<br/>

      <h1><center>Latihan CRUD Laravel 5.8 | www.hakkoblogs.com</center></h1>
      <h3><center>Input Data </center></h3>
	
	<br/>
	<br/>
 
	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
              <label for="name">Id :</label>
              <input type="text" class="form-control" name="nik" id="nik" required="required"/>
        </div>
        <div class="form-group">
              <label for="name">Nama :</label>
              <input type="text" class="form-control" name="nama" id="nama"/>
        </div>
        <div class="form-group">
              <label for="name">Departement :</label>
              <input type="text" class="form-control" name="departemen" id="departemen" required="required"/>
        </div>
        <div class="form-group">
              <label for="name">Level :</label>
              <input type="text" class="form-control" name="jabatan" id="jabatan" required="required"/>
        </div>
        <div class="form-group">
              <label for="name">Alamat :</label>
              <input type="text" class="form-control" name="alamat" id="alamat" required="required"/>
        </div>
        <div class="form-group">
              <input type="submit" class="btn btn-md btn-success" value="Simpan Data"/> <a href="/karyawan" class="btn btn-md btn-primary"> Kembali</a>
        </div>
	</form>
@endsection