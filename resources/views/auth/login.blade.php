@extends('layouts.app')

@section('content')
<div class="container">
<div class="header text-center row mb-5">
    <h1 class="h3"><b>SELAMAT DATANG<br>DI E-POSYANDU KELURAHAN PASIR MUNCANG</b></h3>
</div>
    <div class="container">
        <div class="row justify-content-start">
            <div class="slide col-md-1 col-sm-5">

                    <img src="{{ asset('image/1.JPG') }}" style="width: 650px" alt="">
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="card">
                    <div>
                        <h4 style="color: 
                        Black;" align="center" size="100">Silakan Login</h4>
                        
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat saya') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 offset-md-3">
                                    <div class="mb-0">
                                        <button type="submit" class="btn btn-primary w-50">
                                            {{ __('Masuk') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12 offset-md-3">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link w-50" href="{{ route('password.request') }}">
                                                {{ __('Lupa password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-12 offset-md-3">
                                        @if (Route::has('register'))
                                            <a class="btn btn-link w-50" href="{{ route('register') }}">
                                                {{ __('Daftar Akun') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
            {{-- <div class="new2">
                <img
                src="https://akah.desa.id/desa/upload/artikel/sedang_1581126662_AYO+KE+POSYANDU.jpg"
            </div>
        <div class="row justify-content-end">
            <div class="col-md-auto">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat saya') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 offset-md-3">
                                    <div class="mb-0">
                                        <button type="submit" class="btn btn-primary w-50">
                                            {{ __('Masuk') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12 offset-md-3">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link w-50" href="{{ route('password.request') }}">
                                                {{ __('Lupa password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-12 offset-md-3">
                                        @if (Route::has('register'))
                                            <a class="btn btn-link w-50" href="{{ route('register') }}">
                                                {{ __('Daftar Akun') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div> --}}
    </div>
@endsection
