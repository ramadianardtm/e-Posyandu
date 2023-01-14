@extends('dashboard.layouts.main')

@section('container')
<style>
    .btn-edit {
        background-color: #979797;
        color: #000;
        font-size: 13px;
        border: solid 1px #000;
        border-radius: 4px;
    }

    .btn-edit:hover {
        background-color: #000;
        color: #fff;
        border: solid 1px #fff;
        border-radius: 4px;
    }
</style>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Jadwal Posyandu</h1>
</div>
<div class="container">
    <div class="row justify-content-start">
        @if($jadwal->count() == 0)
        <div class="text-center" style="padding: 60px;margin-bottom:50px;">
            <a href=""><i class="fas fa-exclamation-circle" style="font-size: 100px;color:#ffec58"></i></a>
            <br>
            <h5 style="margin-top: 20px;">Tidak ada jadwal terdaftar</h5>
        </div>
        @else
        <div class="new2">
            @foreach($jadwal as $jd)
            @endforeach
            <center>
                <img class="mb-2" src="/storage/{{ $jd->image }}" style="width:100%;height:100%;object-fit:cover;border-radius:12px;" />
            </center>
        </div>
        @endif
    </div>
    @endsection