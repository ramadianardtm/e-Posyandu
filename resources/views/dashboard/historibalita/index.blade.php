@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Balita</h1>
    </div>
    <form class="form" action='{{ route('balita.create') }}'>
        @foreach ($data as $item)
            <div class="form-group">
                <label>Nama Balita</label>
                <input disabled type="text" class="form-control" name="name" value="{{ $item -> name }}">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input disabled type="text" class="form-control" name="dob" value="{{ $item -> dob }}">
            </div>
            <div class="row p-3">
            <h1 class="h2">Histori Pemeriksaan Balita</h1>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Berat Badan</th>
                    <th scope="col">Tinggi Badan</th>
                    <th scope="col">Lingkar Kepala</th>
                    <th scope="col">Suhu</th>
                    <th scope="col">Imunisasi</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Catatan</th>
                    <th scope="col">Penanganan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                </tbody>
              </table>
        @endforeach
    </form>
  </div>
@endsection
