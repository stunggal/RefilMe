<?php

namespace App\Http\Controllers;

use App\Models\kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kurir.index', [
            "title" => "Kurir",
            "section" => "Master",
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
    public function update(Request $request, kurir $kurir)
    {
        //
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
