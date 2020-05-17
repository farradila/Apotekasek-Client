<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BeliController extends Controller
{
    public function index()
    {
        $request = Http::get('http://localhost/apotekasek1/api/beli');
        $beli = json_decode($request->body(), true);
        return view('beli',['beli' => $beli]);
    }

    // TODO: Fixing Delete
    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/apotekasek1/api/beli', [
            'kode_beli' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/beli');
        } else {
            return redirect('/beli');
        }
    }

    public function tambah()
    {
        //memanggil view tambah 
        return view('/tambahBeli');
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/apotekasek1/api/beli', [
            'kode_pelanggan' => $request->kode_pelanggan,
            'kode_obat'      => $request->kode_obat,
            'jenis_obat'     => $request->jenis_obat,
            'banyak_beli'    => $request->banyak_beli,
            'harga'          => $request->harga,
            'tanggal_beli'   => $request->tanggal_beli
        ]);

        if ($client->status() == 200) {
            return redirect('/beli');
        } else {
            return redirect('/beli');
        }
    }

    public function update($id){
        $request = Http::get('http://localhost/apotekasek1/api/beli?kode_beli='.$id);
        $beli = json_decode($request->body(), true);
        return view('updateBeli', ['beli' => $beli]);
    }

    public function u_process($id, Request $request){
        $client = Http::asForm()->put('http://localhost/apotekasek1/api/beli',[
            'kode_beli'      => $id,
            'kode_pelanggan' => $request->kode_pelanggan,
            'kode_obat'      => $request->kode_obat,
            'jenis_obat'     => $request->jenis_obat,
            'banyak_beli'    => $request->banyak_beli,
            'harga'          => $request->harga,
            'tanggal_beli'   => $request->tanggal_beli
        ]);

        if ($client->successful()) {
            return redirect('/beli');
        } else {
            return redirect('/beli');
        }
    }
}
