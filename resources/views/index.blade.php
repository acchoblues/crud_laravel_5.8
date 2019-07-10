@extends('layout')

@section('content')
    <br/>
	<br/>
    <h1><center>Latihan CRUD Laravel 5.8 | www.hakkoblogs.com</center></h1>
    

<a href="/karyawan/tambah" class="btn btn-md btn-primary"> + Tambah Data</a>

<div class="text-right">
<form action="/karyawan/cari" class="full-right" method="GET">
	<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
	<input type="submit" class="btn btn-md btn-warning" value="Cari Data"> <a href="/karyawan" class="btn btn-md btn-info"> Refresh</a> 
</form>
</div>
	<br/>
	<table class="table table-bordered">
		<tr>
			<th>NIK</th>
			<th>Nama</th>
			<th>Departemen</th>
			<th>Jabatan</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->nik }}</td>
			<td>{{ $k->nama }}</td>
			<td>{{ $k->departemen }}</td>
			<td>{{ $k->jabatan }}</td>
			<td>{{ $k->alamat }}</td>
			<td>
				<a href="/karyawan/edit/{{ $k->nik }}" class="btn btn-sm btn-success"> Update</a>
				|
				<a href="/karyawan/hapus/{{ $k->nik }}" class="btn btn-sm btn-danger"> Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    
	Halaman : {{ $karyawan->currentPage() }} <br/>
	Jumlah Data : {{ $karyawan->total() }} <br/>
	Data Per Halaman : {{ $karyawan->perPage() }} <br/>

	{{ $karyawan->links() }}
	
@endsection