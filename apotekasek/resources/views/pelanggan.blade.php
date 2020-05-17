@extends('master')

@section('title','Data Pelanggan')

@section('judul_halaman','Data Pelanggan')

@section('konten')
<a href="/apotekasek/public/pelanggan/tambah"  class="btn btn-primary">Tambah Data Pelanggan</a>
<br/>
<br/>
<table class="table table-striped table-bordered" id="datatables">
    <thead>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </thead>

     <tbody>
        <?php $no = 1; ?>
        @foreach($pelanggan['data'] as $plgn) 
        <tr>
            <td>{{ $no }} <?php $no++; ?></td>
            <td>{{ $plgn['nama_pelanggan'] }}</td>
            <td>{{ $plgn['alamat'] }}</td>
            <td>
                <a href="/apotekasek/public/pelanggan/hapus/ {{ $plgn['kode_pelanggan'] }}" class="btn btn-danger">Delete</a>
                <a href="/apotekasek/public/pelanggan/update/ {{ $plgn['kode_pelanggan'] }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection