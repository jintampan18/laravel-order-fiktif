@extends('pages.guest.layouts.app')

@section('content')
    <main class="main">
        {{-- Header --}}
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assetsGuest/img/page-title-bg.jpg') }});">
            <div class="container position-relative">
                <h1>082245893329</h1>
                <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
                    molestias.</p>
            </div>
        </div>

        {{-- Body --}}
        <section id="service-details" class="service-details section">
            <div class="container">
                <h1 class="text-center">Detail Pengaduan</h1>

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Pengaduan</h5>
                        <hr>

                        <div class="mb-3">
                            <strong>Nama Driver:</strong>
                            <p>Nama Driver</p>
                        </div>

                        <div class="mb-3">
                            <strong>Nama Customer:</strong>
                            <p>Nama Customer</p>
                        </div>

                        <div class="mb-3">
                            <strong>Nomor Customer:</strong>
                            <p>0823xxxxxxxxxxxx</p>
                        </div>

                        <div class="mb-3">
                            <strong>Jenis Aduan:</strong>
                            <p>Layanan</p>
                        </div>

                        <div class="mb-3">
                            <strong>Catatan:</strong>
                            <p>Ini adalah catatan pengaduan yang diberikan oleh customer.</p>
                        </div>

                        <div class="mb-3">
                            <strong>Bukti Screenshot:</strong>
                            <p>
                                <img id="preview" class="img-fluid" src="{{ asset('assetsGuest/img/page-title-bg.jpg') }}"
                                    alt="Preview">
                            </p>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-secondary" onclick="window.history.back();">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Service Details Section -->
    </main>
@endsection
