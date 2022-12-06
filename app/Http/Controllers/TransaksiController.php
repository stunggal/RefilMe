<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\barangPesanan;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = barang::all();
        return view('transaksi.index', [
            "title" => "Order Somethings",
            "section" => "pembeli",
            "barangs" => $barangs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(barang $barang)
    {
        $transaksis = transaksi::all();
        $current_transaksi = count($transaksis) + 1;

        return view('transaksi.show', [
            "title" => "Order Somethings",
            "section" => "pembeli",
            "barang" => $barang,
            "current_transaksi" => $current_transaksi,
        ]);
    }

    public function showKeranjang()
    {
        return view('transaksi.keranjang', [
            "title" => "Keranjang",
            "section" => "pembeli",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, barang $barang)
    {
        $transaksi = transaksi::where('user_id', Auth::user()->id);
        $transaksi = $transaksi->where('status', 'waiting')->orderBy('id', 'DESC')->first();

        if (!$transaksi) {
            $validatedDataTransaksi = $request->validate([
                'alamat' => 'required',
            ]);
            $validatedDataTransaksi['user_id'] = Auth::user()->id;

            transaksi::create($validatedDataTransaksi);

            $transaksi = transaksi::where('user_id', Auth::user()->id);
            $transaksi = $transaksi->where('status', 'waiting')->orderBy('id', 'DESC')->first();
        }

        $validatedDataBarangPesanan = $request->validate([
            'banyaknya' => 'required|numeric|min:1',
        ]);
        $validatedDataBarangPesanan['transaksi_id'] = $transaksi->id;
        $validatedDataBarangPesanan['barang_id'] = $barang->id;

        barangPesanan::create($validatedDataBarangPesanan);

        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    public function showBarang(barang $barang)
    {
        return $barang;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
}
