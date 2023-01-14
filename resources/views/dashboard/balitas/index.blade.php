@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Balita</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftarkan Balita</div>

                <div class="card-body">
                    <form method="POST" action="{{ route ('balita.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Nama Balita</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" class="form-control" name="nik" value="{{ old('nik') }}">
                        </div>
                        <div class="form-group">
                            <label>No Kartu Kependudukan</label>
                            <input type="number" class="form-control" name="nokk" value="{{ old('nokk') }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" checked>
                                <label class="form-check-label" for="jeniskelamin">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">
                                <label class="form-check-label" for="jeniskelamin">
                                    Perempuan
                                </label>
                            </div>
                        </div>

                        <div class="row mb-3">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="dob" value="{{ old('dob') }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" cols="30" rows="10">{{ old('address') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-control" name="namaayah" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-control" name="namaibu" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection