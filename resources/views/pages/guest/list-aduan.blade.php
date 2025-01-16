@extends('pages.guest.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assetsGuest/img/page-title-bg.jpg') }});">
            <div class="container position-relative">
                <h1>{{ $customerNumber }}</h1>
                <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
                    molestias.</p>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container">
                <h3 class="text-center">Hasil Pencarian</h3>
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
                                                    {{ $complaint->user->username }}
                                                    {{-- <span
                                                        class="custom-badge
                                                @if ($complaint->status_aduan == 'proses') badge-pending
                                                @elseif($complaint->status_aduan == 'verifikasi') badge-accepted
                                                @elseif($complaint->status_aduan == 'tolak') badge-rejected
                                                @else badge-default @endif">
                                                        {{ $complaint->status_aduan }}
                                                    </span> --}}
                                                </p>
                                                <p class="card-text">{{ $complaint->created_at }}</p>
                                            </div>
                                            <img src="{{ asset('storage/' . $complaint->bukti_ss) }}" alt="Bukti Screenshot"
                                                class="status-image">
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
