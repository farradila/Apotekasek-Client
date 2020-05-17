@extends('master')

@section('title','Tambah Data')

@section('judul_halaman','Tambah Data Pelanggan')

@section('konten')
<a href="/apoteksek/public/pelanggan" class="btn btn-danger">Kembali</a>
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
<form action="/apotekasek/public/pelanggan/add" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" class="form-control"  name="nama_pelanggan" value="{{ old('nama_pelanggan') }}"> <br>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control"  name="alamat" value="{{ old('alamat') }}"> <br>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
        <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
    </form>
@endsection