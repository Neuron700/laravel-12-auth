@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
                <div class="container-fluid py-2">
                    <h1 class="display-5 fw-bold mb-2">{{ config('app.name', 'Laravel') }}</h1>
                    <p class="col-md-9 fs-5 text-muted">
                        Aplikasi contoh <strong>Laravel 12</strong> dengan autentikasi: registrasi, login,
                        reset password, dan halaman dashboard yang dilindungi middleware <code>auth</code>.
                    </p>

                    <div class="d-flex flex-wrap gap-2 mt-3">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-primary btn-lg">Buka Dashboard</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Daftar Sekarang</a>
                            @endif
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg">Masuk</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Autentikasi Laravel</h5>
                            <p class="card-text text-muted mb-0">
                                Login, registrasi, dan reset password ditangani pengontrol bawaan Laravel
                                (<code>Auth::routes()</code>).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Halaman Terlindungi</h5>
                            <p class="card-text text-muted mb-0">
                                Route <code>/home</code> hanya bisa dibuka setelah login; tamu otomatis
                                dialihkan ke halaman masuk.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Database SQLite</h5>
                            <p class="card-text text-muted mb-0">
                                Data disimpan pada <code>database/database.sqlite</code> melalui migrasi
                                dan Eloquent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
