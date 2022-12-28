<?php

namespace App\Http\Controllers;

use App\Models\HistoriIbuHamil;
use Illuminate\Http\Request;

class DashboardHistoriIbuHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.historiibuhamil.index');
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
     * @param  \App\Models\HistoriIbuHamil  $historiIbuHamil
     * @return \Illuminate\Http\Response
     */
    public function show(HistoriIbuHamil $historiIbuHamil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoriIbuHamil  $historiIbuHamil
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoriIbuHamil $historiIbuHamil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistoriIbuHamil  $historiIbuHamil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoriIbuHamil $historiIbuHamil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoriIbuHamil  $historiIbuHamil
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoriIbuHamil $historiIbuHamil)
    {
        //
    }
}
