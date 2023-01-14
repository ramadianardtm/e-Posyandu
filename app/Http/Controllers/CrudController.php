<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\ibuhamilnew;
use App\Models\JadwalPeriksa;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function regibuhamils(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required',
            'nokk' => 'required',
            'address' => 'required',
            'usia' => 'required',
            'namasuami' => 'required',
            'nohp' => 'required',
        ]);

        $ibuhamil = new ibuhamilnew();
        $ibuhamil->name = $request->name;
        $ibuhamil->nik = $request->nik;
        $ibuhamil->nokk = $request->nokk;
        $ibuhamil->address = $request->address;
        $ibuhamil->usia = $request->usia;
        $ibuhamil->namasuami = $request->namasuami;
        $ibuhamil->nohp = $request->nohp;
        $ibuhamil->save();

        return redirect('/ibuhamils');
    }
    public function ubahbalita(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required',
            'nokk' => 'required',
            'address' => 'required',
            'namaayah' => 'required',
            'namaibu' => 'required',
        ]);

        $balita = Balita::find($id);
        $balita->name = $request->name;
        $balita->nik = $request->nik;
        $balita->nokk = $request->nokk;
        $balita->address = $request->address;
        $balita->namaayah = $request->namaayah;
        $balita->namaibu = $request->namaibu;
        $balita->save();

        return redirect('/daftar-balita');
    }
    public function postinputpemeriksaan(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'date' => 'required',
            'berat' => 'required',
            'tinggi' => 'required',
            'lingkar' => 'required',
            'suhu' => 'required',
            'keluhan' => 'required',
            'penanganan' => 'required',
        ]);

        $periksa = new Pemeriksaan();
        $periksa->balita_id = $request->balita_id;
        $periksa->name = $request->name;
        $periksa->date = $request->date;
        $periksa->berat = $request->berat;
        $periksa->tinggi = $request->tinggi;
        $periksa->lingkar = $request->lingkar;
        $periksa->suhu = $request->suhu;
        $periksa->imunisasi = $request->imunisasi;
        $periksa->keluhan = $request->keluhan;
        $periksa->penanganan = $request->penanganan;
        $periksa->catatan = $request->catatan;
        $periksa->save();

        return redirect('/pemeriksaan-balita');
    }
    public function editpemeriksaan(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'date' => 'required',
            'berat' => 'required',
            'tinggi' => 'required',
            'lingkar' => 'required',
            'suhu' => 'required',
            'keluhan' => 'required',
            'penanganan' => 'required',
        ]);
        $periksa = Pemeriksaan::find($id);
        $periksa->balita_id = $request->balita_id;
        $periksa->name = $request->name;
        $periksa->date = $request->date;
        $periksa->berat = $request->berat;
        $periksa->tinggi = $request->tinggi;
        $periksa->lingkar = $request->lingkar;
        $periksa->suhu = $request->suhu;
        $periksa->imunisasi = $request->imunisasi;
        $periksa->keluhan = $request->keluhan;
        $periksa->penanganan = $request->penanganan;
        $periksa->catatan = $request->catatan;
        $periksa->save();

        return redirect('/lihat-pemeriksaan/'.$id);    
    }
    public function insertjadwal(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        $jadwal = new JadwalPeriksa();
        $image = str_replace(' ', '', $request->name) . '.' . $request->file('image')->getClientOriginalExtension();
        $request->image->storeAs(
            '\public\\',
            $image
        );
        $jadwal->image = $image;
        $jadwal->save();

        return redirect('/pemeriksaan-balita');
    }
}
