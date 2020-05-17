@extends('master')

@section('title','Edit Data')

@section('judul_halaman','Edit Data Obat')

@section('konten')

<a href="/apotekasek/public/obat" class="btn btn-danger">Kembali</a>
<br/>
<br/>
<!-- isi bagian konten -->
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- form validasi -->
    @foreach($obat['data'] as $obat)
    <form action="/apotekasek/public/obat/u_process/{{ $obat['kode_obat'] }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="merk_obat">Merk Obat</label>
            <input type="text" class="form-control"  name="merk_obat" value="{{ $obat['merk_obat'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="jenis_obat">Jenis Obat</label>
            <input type="text" class="form-control"  name="jenis_obat" value="{{ $obat['jenis_obat'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control"  name="harga" value="{{ $obat['harga'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
            <input type="date" class="form-control"  name="tanggal_kadaluarsa" value="{{ $obat['tanggal_kadaluarsa'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" class="form-control"  name="stok" value="{{ $obat['stok'] }}"> <br>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
        <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
    </form>
    @endforeach
@endsection