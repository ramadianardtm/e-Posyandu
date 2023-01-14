@extends('dashboard.layouts.main')

@section('container')
<style>
    .btn-edit{
        background-color: #979797;
        color: #000;
        font-size: 13px;
        border: solid 1px #000;
        border-radius: 4px;
    }
    .btn-edit:hover{
        background-color: #000;
        color: #fff;
        border: solid 1px #fff;
        border-radius: 4px;
    }
</style>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Informasi Pemeriksaan Balita</h1>
</div>

<div class="w-12/12 bg-white  rounded-2xl shadow-md max-h-80vh overflow-auto">

    <div class="row">
        <div class="col-sm-3">
            <p>ID Peserta</p>
        </div>
        <div class="col-sm-4">
            @foreach ($periksa as $bt)
            @endforeach
            <input type="text" class="form-control" disabled value="{{$bt->balita_id}}">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-3">
            <p>Nama Balita</p>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" disabled value="{{$bt->name}}">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-3">
            <p>Tempat, Tgl Lahir</p>
        </div>
        <div class="col-sm-4">
            <?php $user_info = App\Models\Balita::find($bt->balita_id); ?>
            <input type="text" class="form-control" disabled value="{{$user_info->dob}}">
        </div>
    </div>
    <h4 class="mt-5">Histori Kesehatan Balita</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Bulan</th>
                <th>Tanggal</th>
                <th>BB</th>
                <th>TB</th>
                <th>Lingkar Kepala</th>
                <th>Suhu</th>
                <th>Imunisasi</th>
                <th>Keluhan</th>
                <th>Catatan</th>
                <th>Penanganan</th>
                <th style="width: 100px;"></th>
            </tr>
        </thead>
        <tbody>

            @if($periksa->count() == 0)
            <div class="text-center" style="padding: 60px;margin-bottom:50px;">
                <a href=""><i class="fas fa-exclamation-circle" style="font-size: 100px;color:#ffec58"></i></a>
                <br>
                <h5 style="margin-top: 20px;">Tidak ada pemeriksaan terdaftar</h5>
            </div>
            @else
            @foreach ($periksa as $bt)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$bt->date}}</td>
                <td>{{$bt->berat}}</td>
                <td>{{$bt->tinggi}}</td>
                <td>{{$bt->lingkar}}</td>
                <td>{{$bt->suhu}}</td>
                <td>{{$bt->imunisasi}}</td>
                <td>{{$bt->keluhan}}</td>
                <td>{{$bt->catatan}}</td>
                <td>{{$bt->penanganan}}</td>
                <td>
                    <a href="/edit-pemeriksaan/{{ $bt->id }}"><button class="btn btn-edit"><i class="fa-solid fa-pen-to-square" style="margin-right: 5px;"></i>Edit</button></a>
                </td>

            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

</div>

@endsection