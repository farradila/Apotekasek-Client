@extends('master')

@section('title','Beli')

@section('judul_halaman','Data Pembelian')

@section('konten')
<a href="/apotekasek/public/beli/tambah" class="btn btn-primary">Tambah Data Pembelian</a>
<br/>
<br/>
<div class="table table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
    <thead>
        <th>No</th>
        <th>Kode Pelanggan</th>
        <th>Kode Obat</th>
        <th>Jenis Obat</th>
        <th>Banyak Beli</th>
        <th>Harga</th>
        <th>Tanggal Beli</th>
        <th>Aksi</th>
    </thead>

     <tbody>
        <?php $no = 1; ?>
        @foreach($beli['data'] as $bli) 
        <tr>
            <td>{{ $no }} <?php $no++; ?></td>
            <td>{{ $bli['kode_pelanggan'] }}</td>
            <td>{{ $bli['kode_obat'] }}</td>
            <td>{{ $bli['jenis_obat'] }}</td>
            <td>{{ $bli['banyak_beli'] }}</td>
            <td>{{ $bli['harga'] }}</td>
            <td>{{ $bli['tanggal_beli'] }}</td>
            <td>
                <a href="/apotekasek/public/beli/hapus/{{ $bli['kode_beli'] }}" class="btn btn-danger">Delete</a>
                <a href="/apotekasek/public/beli/update/{{ $bli['kode_beli'] }}" class="btn btn-warning">Update</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection