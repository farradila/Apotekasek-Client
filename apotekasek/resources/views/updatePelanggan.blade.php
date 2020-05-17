@extends('master')

@section('title','Edit Data')

@section('judul_halaman','Edit Data Pelanggan')

@section('konten')

<a href="/apotekasek/public/pelanggan" class="btn btn-danger">Kembali</a>
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
    @foreach($pelanggan['data'] as $pelanggan)
    <form action="/apotekasek/public/pelanggan/u_process/{{ $pelanggan['kode_pelanggan'] }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" class="form-control"  name="nama_pelanggan" value="{{ $pelanggan['nama_pelanggan'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control"  name="alamat" value="{{ $pelanggan['alamat'] }}"> <br>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
        <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
    </form>
    @endforeach
@endsection