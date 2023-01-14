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
    <h1 class="h2">Edit Pemeriksaan Balita</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($errors->any())
                <div class="alert-danger">
                    {{ $errors->first() }}
                </div>
                @endif
                <div class="card-header">Info Balita</div>

                <div class="card-body">
                    <?php $user_info = App\Models\Balita::find($periksa->balita_id); ?>
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>ID Peserta</label>
                            <input type="hidden" name="balita_id" class="form-control" value="{{ $user_info->id }}">
                            <input type="hidden" name="name" class="form-control" value="{{ $user_info->name }}">
                            <input type="text" class="form-control" value="{{ $user_info->id }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama Balita</label>
                            <input type="text" class="form-control" value="{{ $user_info->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pemeriksaan</label>
                            <input type="date" class="form-control" name="date" value="{{$periksa->date}}">
                        </div>
                        <div class="form-group">
                            <label>Berat Badan</label>
                            <input type="number" class="form-control" name="berat" value="{{$periksa->berat}}">
                        </div>
                        <div class="form-group">
                            <label>Tinggi Badan</label>
                            <input type="number" class="form-control" name="tinggi" value="{{$periksa->tinggi}}">
                        </div>
                        <div class="form-group">
                            <label>Lingkar Kepala</label>
                            <input type="number" class="form-control" name="lingkar" value="{{$periksa->lingkar}}">
                        </div>
                        <div class="form-group">
                            <label>Suhu</label>
                            <input type="number" class="form-control" name="suhu" value="{{$periksa->suhu}}">
                        </div>
                        <div class="form-group">
                            <label>Imunisasi</label>
                            <input type="text" class="form-control" name="imunisasi" value="{{$periksa->imunisasi}}">
                        </div>
                        <div class="form-group">
                            <label>Keluhan</label>
                            <textarea name="keluhan" class="form-control" cols="10" rows="5">{{$periksa->keluhan}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Penanganan</label>
                            <textarea name="penanganan" class="form-control" cols="10" rows="5">{{$periksa->penanganan}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Catatan</label>
                            <textarea name="catatan" class="form-control" cols="10" rows="5">{{$periksa->catatan}}</textarea>
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