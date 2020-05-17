@extends('master')

@section('title', 'Validasi Data')

@section('judul_halaman', 'Validasi Data Pelanggan')

@section('konten')
<h3 class="my-4">Data Yang Di Input : </h3>
	<table class="table table-bordered table-striped">
		<tr>
			<td style="width:150px">Nama Pelanggan</td>
			<td>{{ $data->nama_pelanggan }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>{{ $data->alamat }}</td>
		</tr>
	</table>
	<a href="/apotek/public/pelanggan" class="btn btn-danger">Kembali</a>

@endsection