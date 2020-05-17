@extends('master')

@section('title','Edit Data')

@section('judul_halaman','Edit Data Beli')

@section('konten')
<a href="/apotekasek/public/beli" class="btn btn-danger">Kembali</a>
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
@foreach($beli['data'] as $beli) 
<form action="/apotekasek/public/beli/u_process/{{ $beli['kode_beli'] }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode_pelanggan">Kode Pelanggan</label>
            <input type="text" class="form-control"  name="kode_pelanggan" value="{{ $beli['kode_pelanggan'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="kode_obat">Kode Obat</label>
            <input type="text" class="form-control"  name="kode_obat" value="{{ $beli['kode_obat'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="jenis_obat">Jenis Obat</label>
            <input type="text" class="form-control"  name="jenis_obat" value="{{ $beli['jenis_obat'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="banyak_beli">Banyak Beli</label>
            <input type="text" class="form-control"  name="banyak_beli" value="{{ $beli['banyak_beli'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control"  name="harga" value="{{ $beli['harga'] }}"> <br>
        </div>
        <div class="form-group">
            <label for="tanggal_beli">Tanggal Beli</label>
            <input type="date" class="form-control"  name="tanggal_beli" value="{{ $beli['tanggal_beli'] }}"> <br>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
        <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
    </form>
@endforeach
@endsection
