@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Info Balita</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Info Balita</div>
     
                    <div class="card-body">
                            <div class="form-group">
                                <label>Nama Balita</label>
                                <input type="text" class="form-control" name="name" value="{{ $balita->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" class="form-control" name="nik" value="{{ $balita->nik }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>No Kartu Kependudukan</label>
                                <input type="number" class="form-control" name="nokk" value="{{ $balita->nokk }}" disabled>
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
                                <textarea name="address" class="form-control" cols="30" rows="10" disabled>{{ $balita->address }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input type="text" class="form-control" name="namaayah" value="{{ $balita->namaayah }}" disabled>
                            </div>

                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control" name="namaibu" value="{{ $balita->namaibu }}" disabled>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            @endsection
