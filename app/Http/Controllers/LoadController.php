<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\JadwalPeriksa;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoadController extends Controller
{   
    public function getibuhamils()
    {
        return view('dashboard.ibuhamils.index');
    }
    public function getdaftarbalita()
    {
        $balita = Balita::all();
        return view('admin.daftar-balita')->with('balita',$balita);
    }
    public function getpemeriksaanbalita()
    {
        $balita = Balita::all();
        return view('admin.pemeriksaan-balita')->with('balita',$balita);
    }
    public function  getviewbalita($id)
    {
        $balita = Balita::find($id);
        return view('admin.view-balita')->with('balita',$balita);
    }
    public function getubahbalita($id)
    {
        $balita = Balita::find($id);
        return view('admin.ubah-balita')->with('balita',$balita); 
    }
    public function getinputpemeriksaan($id)
    {
        $balita = Balita::find($id);
        return view('admin.input-pemeriksaan')->with('balita',$balita); 
    }
    public function geteditpemeriksaan($id)
    {
        $periksa = Pemeriksaan::find($id);

        return view('admin.edit-pemeriksaan')->with('periksa',$periksa);
    }
    public function getlihatpemeriksaan($id)
    {
        $periksa = Pemeriksaan::where('balita_id','=',$id)->get();
        //  dd($periksa);
        return view('admin.lihat-pemeriksaan')->with('periksa',$periksa); 
    }
    public function lihatpemeriksaanuser()
    {
        $periksa = Pemeriksaan::where('balita_id','=', Auth::user()->id)->get();

        return view('dashboard.historibalita.lihat-pemeriksaan')->with('periksa',$periksa);
    }
    public function lihatjadwal()
    {
        $jadwal = JadwalPeriksa::all();

        return view('dashboard.user.jadwal')->with('jadwal',$jadwal);
    }
    
}
