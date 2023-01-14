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
    <h1 class="h2">Daftar Pemeriksaan Balita</h1>
</div>

<div class="w-12/12 bg-white  rounded-2xl shadow-md max-h-80vh overflow-auto">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Peserta</th>
                <th>Nama Balita</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @if($balita->count() == 0)
            <div class="text-center" style="padding: 60px;margin-bottom:50px;">
                <a href=""><i class="fas fa-exclamation-circle" style="font-size: 100px;color:#ffec58"></i></a>
                <br>
                <h5 style="margin-top: 20px;">Tidak ada balita terdaftar</h5>
            </div>
            @else
            @foreach ($balita as $bt)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$bt->id}}</td>
                <td>{{$bt->name}}</td>
                <td>{{$bt->dob}}</td>
                <td>
                <a href="/input-pemeriksaan/{{ $bt->id }}"><button class="btn btn-edit"><i class="fa-solid fa-download" style="margin-right: 5px;"></i>Input</button></a>
                    <a href="/lihat-pemeriksaan/{{ $bt->id }}"><button class="btn btn-edit"><i class="fa-solid fa-eye" style="margin-right: 5px;"></i>Lihat</button></a>
                    <a href="/ubah-balita/{{ $bt->id }}"><button class="btn btn-edit"><i class="fa-solid fa-pen-to-square" style="margin-right: 5px;"></i>Ubah</button></a>
                </td>

            </tr>
            @endforeach
            @endif  
        </tbody>
    </table>

</div>

@endsection