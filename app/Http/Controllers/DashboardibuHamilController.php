<?php

namespace App\Http\Controllers;

use App\Models\ibuHamil;
use Illuminate\Http\Request;

class DashboardibuHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ibuhamils.index');
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
     * @param  \App\Models\ibuHamil  $ibuHamil
     * @return \Illuminate\Http\Response
     */
    public function show(ibuHamil $ibuHamil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ibuHamil  $ibuHamil
     * @return \Illuminate\Http\Response
     */
    public function edit(ibuHamil $ibuHamil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ibuHamil  $ibuHamil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ibuHamil $ibuHamil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ibuHamil  $ibuHamil
     * @return \Illuminate\Http\Response
     */
    public function destroy(ibuHamil $ibuHamil)
    {
        //
    }
}
