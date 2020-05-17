@extends('master')

@section('title','Tambah Data')

@section('judul_halaman','Tambah Data Obat')

@section('konten')
<a href="/beli" class="btn btn-danger">Kembali</a>
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
<form action="/apotekasek/public/beli/add" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode_pelanggan">Kode pelanggan</label>
            <input type="text" class="form-control"  name="kode_pelanggan" value="{{ old('kode_pelanggan') }}"> <br>
        </div>
        <div class="form-group">
            <label for="kode_obat">Kode obat</label>
            <input type="text" class="form-control"  name="kode_obat" value="{{ old('kode_obat') }}"> <br>
        </div>
        <div class="form-group">
            <label for="jenis_obat">Jenis obat</label>
            <input type="text" class="form-control"  name="jenis_obat" value="{{ old('jenis_obat') }}"> <br>
        </div>
        <div class="form-group">
            <label for="banyak_beli">Banyak beli</label>
            <input type="text" class="form-control"  name="banyak_beli" value="{{ old('banyak_beli') }}"> <br>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control"  name="harga" value="{{ old('harga') }}"> <br>
        </div>
        <div class="form-group">
            <label for="tanggal_beli">Tanggal beli</label>
            <input type="date" class="form-control"  name="tanggal_beli" value="{{ old('tanggal_beli') }}"> <br>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
        <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
    </form>
@endsection