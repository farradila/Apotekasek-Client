<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = Http::get('http://localhost/apotekasek1/api/Obat');
        $obat = json_decode($request->body(), true);
        return view('obat',['obat' => $obat]);
    }

    public function tambah()
    {
        //memanggil view tambah 
        return view('/tambahObat');
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/apotekasek1/api/Obat', [
            'merk_obat' => $request->merk_obat,
            'jenis_obat' => $request->jenis_obat,
            'harga' => $request->harga,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            'stok' => $request->stok
        ]);

        if ($client->status() == 200) {
            return redirect('/obat');
        } else {
            return redirect('/obat');
        }
    }

    public function update($id){
        $request = Http::get('http://localhost/apotekasek1/api/Obat?kode_obat='.$id);
        $obat = json_decode($request->body(), true);
        return view('updateObat', ['obat' => $obat]);
    }

    public function u_process($id, Request $request){
        $client = Http::asForm()->put('http://localhost/apotekasek1/api/Obat', [
        'kode_obat' => $id,
        'merk_obat' => $request->merk_obat,
        'jenis_obat' => $request->jenis_obat,
        'harga' => $request->harga,
        'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        'stok' => $request->stok
        ]);

        if ($client->successful()) {
            return redirect('/obat');
        } else {
            return redirect('/obat');
        }
    }


    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/apotekasek1/api/Obat', [
            'kode_obat' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/obat');
        } else {
            return redirect('/obat');
        }
    }
}
