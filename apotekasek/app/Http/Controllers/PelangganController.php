<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PelangganController extends Controller
{
    public function index()
    {
        $request = Http::get('http://localhost/apotekasek1/api/Pelanggan');
        $pelanggan = json_decode($request->body(), true);
        return view('pelanggan',['pelanggan' => $pelanggan]);
    }

    public function tambah()
    {
        //memanggil view tambah 
        return view('/tambahPelanggan');
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/apotekasek1/api/Pelanggan', [
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat
        ]);

        if ($client->status() == 200) {
            return redirect('/pelanggan');
        } else {
            return redirect('/pelanggan');
        }
    }
    
    public function update($id){
        $request = Http::get('http://localhost/apotekasek1/api/Pelanggan?kode_pelanggan='.$id);
        $pelanggan = json_decode($request->body(), true);
        return view('updatePelanggan', ['pelanggan' => $pelanggan]);
    }

    public function u_process($id, Request $request)
    {
        $client = Http::asForm()->put('http://localhost/apotekasek1/api/Pelanggan', [
            'kode_pelanggan' => $request->id,
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat
        ]);

        if ($client->successful()) {
            return redirect('/pelanggan');
        } else {
            return redirect('/pelanggan');
        }
    }

    // TODO: Fixing Delete
    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/apotekasek1/api/pelanggan', [
            'kode_pelanggan' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/ pelanggan');
        } else {
            return redirect('/pelanggan');
        }
    }
}
