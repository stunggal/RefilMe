<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\pesanan;
use Illuminate\Http\Request;

class PesnaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = barang::all();
        return view('pesanan.index', [
            "title" => "Order",
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
        return view('pesanan.show', [
            "title" => "Order",
            "section" => "pembeli",
            "barang" => $barang,
        ]);
    }

    public function showKeranjang()
    {
        return view('pesanan.keranjang', [
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pesanan $pesanan)
    {
        //
    }
}
