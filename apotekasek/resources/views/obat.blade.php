@extends('master')

@section('title','Data Obat')

@section('judul_halaman','Data Obat')

@section('konten')
<a href="/apotekasek/public/obat/tambah" class="btn btn-primary">Tambah Data Obat</a>
<br/>
<br/>
<table class="table table-striped table-bordered" id="datatables">
    <thead>
        <th>No</th>
        <th>Merk Obat</th>
        <th>Jenis Obat</th>
        <th>Harga</th>
        <th>Tanggal Kadaluarsa</th>
        <th>Stok</th>
        <th>Aksi</th>
    </thead>

     <tbody>
        <?php $no = 1; ?>
        @foreach($obat['data'] as $obt) 
        <tr>
            <td>{{ $no }} <?php $no++; ?></td>
            <td>{{ $obt['merk_obat'] }}</td>
            <td>{{ $obt['jenis_obat'] }}</td>
            <td>{{ $obt['harga'] }}</td>
            <td>{{ $obt['tanggal_kadaluarsa'] }}</td>
            <td>{{ $obt['stok'] }}</td>
            <td>
                <a href="/apotekasek/public/obat/hapus/ {{ $obt['kode_obat'] }}" class="btn btn-danger">Delete</a>
                <a href="/apotekasek/public/obat/update/ {{ $obt['kode_obat'] }}" class="btn btn-warning">Update</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection