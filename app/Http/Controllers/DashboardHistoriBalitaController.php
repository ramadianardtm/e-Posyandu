<?php

namespace App\Http\Controllers;

use App\Models\HistoriBalita;
use Illuminate\Http\Request;

class DashboardHistoriBalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.historibalita.index');
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
     * @param  \App\Models\HistoriBalita  $historiBalita
     * @return \Illuminate\Http\Response
     */
    public function show(HistoriBalita $historiBalita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoriBalita  $historiBalita
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoriBalita $historiBalita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistoriBalita  $historiBalita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoriBalita $historiBalita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoriBalita  $historiBalita
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoriBalita $historiBalita)
    {
        //
    }
}
