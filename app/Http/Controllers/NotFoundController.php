<?php

namespace App\Http\Controllers;

use App\Models\notFound;
use Illuminate\Http\Request;

class NotFoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('error.404', [
            "title" => "Page Not Found"
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
     * @param  \App\Models\notFound  $notFound
     * @return \Illuminate\Http\Response
     */
    public function show(notFound $notFound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notFound  $notFound
     * @return \Illuminate\Http\Response
     */
    public function edit(notFound $notFound)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notFound  $notFound
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notFound $notFound)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notFound  $notFound
     * @return \Illuminate\Http\Response
     */
    public function destroy(notFound $notFound)
    {
        //
    }
}
