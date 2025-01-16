@extends('pages.guest.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assetsGuest/img/page-title-bg.jpg') }});">
            <div class="container position-relative">
                <h2>Aduan Saya</h2>
                <p>Di sini Anda dapat melihat semua aduan yang telah Anda ajukan, termasuk status dan detailnya. Jika ada
                    pertanyaan, silakan hubungi tim kami.</p>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container">
                @if ($complaints->isEmpty())
                    <p>Tidak ada pengaduan yang ditemukan untuk nomor customer tersebut.</p>
                @else
                    <div class="row">
                        @foreach ($complaints as $complaint)
                            <div class="col-md-4">
                                <a href="{{ route('pengaduan_driver.detail', $complaint->id) }}">
                                    <div class="card border-gray bg-light">
                                        <div class="card-body d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">{{ $complaint->name_customer }}</h5>
                                                <p class="card-text">
                                                    <span
                                                        class="custom-badge
                                                @if ($complaint->status_aduan == 'proses') badge-pending
                                                @elseif($complaint->status_aduan == 'verifikasi') badge-accepted
                                                @elseif($complaint->status_aduan == 'tolak') badge-rejected
                                                @else badge-default @endif">
                                                        {{ $complaint->status_aduan }}
                                                    </span>
                                                </p>
                                                <p class="card-text">
                                                    {{ \Carbon\Carbon::parse($complaint->created_at)->translatedFormat('d F Y') }}
                                                </p>
                                            </div>
                                            {{-- <img src="{{ asset('storage/' . $complaint->bukti_ss) }}" alt="Bukti Screenshot"
                                                class="status-image"> --}}
                                            <img src="{{ $complaint->bukti_ss === 'no-image' ? asset('assetsGuest/img/no-image.png') : asset('storage/' . $complaint->bukti_ss) }}"
                                                alt="Bukti Screenshot" class="status-image">

                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section><!-- /Service Details Section -->
    </main>
@endsection
