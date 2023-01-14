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
        <form action="" method="POST" class="w-full" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>
                    <p style="color:#373737;">Insert Jadwal</p>
                </label>
                <input type="file" onchange="loadFile(this)" id="image" name="image" class="form-control-file">
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-edit mx-2">Submit</button>
            </div>
        </form>
        <div class="new2">
            <center>
                <img class="mb-2" id="output" style="width:100%;height:100%;object-fit:cover;border-radius:12px;" />
            </center>
        </div>
        <script>
            var loadFile = function(e) {
                console.log('masuk');
                var output = document.getElementById('output');

                output.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>
        @endsection