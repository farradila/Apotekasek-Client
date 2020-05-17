@extends('master')

@section('title', 'Validasi Data')

@section('judul_halaman', 'Validasi Data Obat')

@section('konten')
<h3 class="my-4">Data Yang Di Input : </h3>
	<table class="table table-bordered table-striped">
		<tr>
			<td style="width:150px">Merk Obat</td>
			<td>{{ $data->merk_obat }}</td>
		</tr>
		<tr>
			<td>Jenis Obat</td>
			<td>{{ $data->jenis_obat }}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>{{ $data->harga }}</td>
		</tr>
		<tr>
			<td>Tanggal Kadaluarsa</td>
			<td>{{ $data->tanggal_kadaluarsa }}</td>
		</tr>
		<tr>
			<td>Stok</td>
			<td>{{ $data->stok }}</td>
		</tr>
	</table>
	<a href="/apotekasek/public/obat" class="btn btn-danger">Kembali</a>

@endsection