@extends('master')

@section('title','Tambah Data')

@section('judul_halaman','Tambah Data Obat')

@section('konten')
<a href="/apoteksek/public/obat" class="btn btn-danger">Kembali</a>
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
<form action="/apotekasek/public/obat/add" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="merk_obat">Merk Obat</label>
            <input type="text" class="form-control"  name="merk_obat" value="{{ old('merk_obat') }}"> <br>
        </div>

        <div class="form-group">
            <label for="jenis_obat">jenis_obat</label>
            <input type="text" class="form-control"  name="jenis_obat" value="{{ old('jenis_obat') }}"> <br>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control"  name="harga" value="{{ old('harga') }}"> <br>
        </div>

        <div class="form-group">
            <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
            <input type="date" class="form-control"  name="tanggal_kadaluarsa" value="{{ old('tanggal_kadaluarsa') }}"> <br>
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" class="form-control"  name="stok" value="{{ old('stok') }}"> <br>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
        <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
    </form>
@endsection