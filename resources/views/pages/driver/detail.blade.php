@extends('pages.guest.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assetsGuest/img/page-title-bg.jpg') }});">
            <div class="container position-relative">
                <h2>Detail Pengaduan</h2>
                <p>Di halaman ini, Anda dapat melihat informasi lengkap mengenai pengaduan yang telah Anda ajukan, termasuk
                    status dan langkah-langkah penyelesaiannya. Jika ada pertanyaan, silakan hubungi tim kami.</p>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Pengaduan</h5>
                        <hr>

                        <div class="mb-3">
                            <strong>Nama Driver:</strong>
                            <p>{{ $complaint->user->username }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Nama Customer:</strong>
                            <p>{{ $complaint->name_customer }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Nomor Customer:</strong>
                            <p>{{ $complaint->number_phone_customer }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Status Aduan:</strong>
                            <p>{{ $complaint->status_aduan }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Jenis Aduan:</strong>
                            <p>{{ $complaint->jenisAduan->title }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Catatan:</strong>
                            <p>{{ $complaint->catatan }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Bukti Screenshot:</strong>
                            <p>
                                <img id="preview" class="img-fluid"
                                    src="{{ $complaint->bukti_ss === 'no-image' ? asset('assetsGuest/img/no-image.png') : asset('storage/' . $complaint->bukti_ss) }}"
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
