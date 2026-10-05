<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampil()
    {
       $barang = Barang::all();
       return view('barang.daftarbarang', ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           return view('barang.create');
    }

    public function simpan(Request $request)
    {
        $barang = new Barang();
        $barang->nama_barang = $request->input('nama_barang');
        $barang->kode_barang = $request->input('kode_barang');
        $barang->jumlah_barang = $request->input('jumlah_barang');
        $barang->harga_barang = $request->input('harga_barang');
        $barang->save();

        return redirect('/daftar-barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function ubah(Barang $barang)
    {
        return view('barang.ubah', ['barang' => $barang]);
    } 

    public function update(Request $request, Barang $barang)
    {
        $barang->nama_barang = $request->get('nama_barang'); 
        $barang->kode_barang = $request->get('kode_barang'); 
        $barang->jumlah_barang = $request->get('jumlah_barang'); 
        $barang->harga_barang = $request->get('harga_barang'); 
        $barang->save(); 
        
        return redirect('/daftar-barang');
    }
    public function konfirmasiHapus(Barang $barang)
    {
        return view('barang.hapus', ['barang' => $barang]);
    }
    public function hapus(Barang $barang)
    {
        $barang->delete();
        return redirect('/daftar-barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
