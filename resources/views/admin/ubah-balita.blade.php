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
    <h1 class="h2">Ubah Balita</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Info Balita</div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Balita</label>
                            <input type="text" class="form-control" name="name" value="{{ $balita->name }}">
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" class="form-control" name="nik" value="{{ $balita->nik }}">
                        </div>
                        <div class="form-group">
                            <label>No Kartu Kependudukan</label>
                            <input type="number" class="form-control" name="nokk" value="{{ $balita->nokk }}" >
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jeniskelamin" value="{{ $balita->jeniskelamin }}" disabled>
                        </div>
                        <div class="row mb-3">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="dob" value="{{ $balita->dob }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" cols="30" rows="10" >{{ $balita->address }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-control" name="namaayah" value="{{ $balita->namaayah }}" >
                        </div>

                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-control" name="namaibu" value="{{ $balita->namaibu }}" >
                        </div>

                        <div class="form-group">
                            <button class="btn btn-edit mt-2">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection