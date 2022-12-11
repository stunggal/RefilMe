<?php

namespace App\Http\Controllers;

use App\Models\kurir;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = transaksi::where('status', 'waiting')->get();
        return view('kurir.index', [
            "title" => "Kurir",
            "section" => "Master",
            "transaksis" => $transaksis,
        ]);
    }

    public function indexPersonal()
    {
        $transaksis = transaksi::where('status', 'proses');
        $transaksis = $transaksis->where('kurir', Auth::user()->id)->get();
        return view('kurir.indexPersonal', [
            "title" => "Kurir",
            "section" => "Master",
            "transaksis" => $transaksis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function show(kurir $kurir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function edit(kurir $kurir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        $kurir['kurir'] = Auth::user()->id;
        $kurir['status'] = 'proses';
        $transaksi->update($kurir);
        return redirect('/mineantar')->with('success', 'Data have been updated!');
    }

    public function updateStatus(Request $request, transaksi $transaksi)
    
    {
        $kurir['status'] = 'Selesai';
        $transaksi->update($kurir);
        return redirect('/')->with('success', 'Produk pelanggan sudah di isi ulang:)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function destroy(kurir $kurir)
    {
        //
    }
}
