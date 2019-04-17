<?php

namespace App\Http\Controllers;

use App\Adendo;
use Illuminate\Http\Request;

class AdendosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(?Contrato $contrato)
    {
        
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
     * @param  \App\Adendo  $adendo
     * @return \Illuminate\Http\Response
     */
    public function show(Adendo $adendo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adendo  $adendo
     * @return \Illuminate\Http\Response
     */
    public function edit(Adendo $adendo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adendo  $adendo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adendo $adendo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adendo  $adendo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adendo $adendo)
    {
        //
    }
}
