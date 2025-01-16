@extends('pages.guest.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assetsGuest/img/page-title-bg.jpg') }});">
            <div class="container position-relative">
                <h1>{{ $customerNumber }}</h1>
                <p>Anda dapat menemukan nomor telepon terkait orderan fiktif yang Anda cari. Jika Anda
                    memiliki pertanyaan lebih lanjut atau membutuhkan bantuan, jangan ragu untuk menghubungi tim kami.</p>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container">
                <h3 class="text-center">Hasil Pencarian</h3>
                @if ($complaints->isEmpty())
                    <p class="text-center">Tidak ada pengaduan yang ditemukan untuk nomor customer tersebut.</p>
                @else
                    <div class="row">
                        @foreach ($complaints as $complaint)
                            <div class="col-md-4">
                                <a href="{{ route('guest.detail', $complaint->id) }}">
                                    <div class="card border-gray bg-light">
                                        <div class="card-body d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">{{ $complaint->name_customer }}</h5>
                                                <p class="card-text">
                                                    {{ $complaint->user->username }}
                                                </p>
                                                <p class="card-text">
                                                    {{ \Carbon\Carbon::parse($complaint->created_at)->translatedFormat('d F Y') }}
                                                </p>
                                            </div>
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
