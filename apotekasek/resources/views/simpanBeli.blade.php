@extends('master')

@section('title', 'Validasi Data')

@section('judul_halaman', 'Validasi Data Beli')

@section('konten')
<h3 class="my-4">Data Yang Di Input : </h3>
	<table class="table table-bordered table-striped">
		<tr>
			<td style="width:150px">Kode pelanggan</td>
			<td>{{ $data->kode_pelanggan }}</td>
		</tr>
		<tr>
			<td style="width:150px">Kode obat</td>
			<td>{{ $data->kode_obat }}</td>
		</tr>
		<tr>
			<td>Jenis Obat</td>
			<td>{{ $data->jenis_obat }}</td>
		</tr>
		<tr>
			<td>Banyak beli</td>
			<td>{{ $data->banyak_beli }}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>{{ $data->harga }}</td>
		</tr>
		<tr>
			<td>Tanggal Beli</td>
			<td>{{ $data->tanggal_beli }}</td>
		</tr>
	</table>
	<a href="/beli" class="btn btn-danger">Kembali</a>

@endsection