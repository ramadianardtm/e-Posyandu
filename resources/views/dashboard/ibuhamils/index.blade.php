@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ibu Hamil</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Daftar ibu hamil</div>
     
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
     
                            <div class="form-group">
                                <label>Nama</label>
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
                                <label>Alamat</label>
                                <textarea name="address" class="form-control" cols="30" rows="10">{{ old('addres') }}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Usia</label>
                                <input type="text" class="form-control" name="usia" value="{{ old('usia') }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Nama Suami</label>
                                <input type="text" class="form-control" name="namasuami" value="{{ old('namasuami') }}">
                            </div>

                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="text" class="form-control" name="nohp" value="{{ old('nohp') }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            @endsection
