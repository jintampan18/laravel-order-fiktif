@extends('pages.guest.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url(assetsGuest/img/page-title-bg.jpg);">
            <div class="container position-relative">
                <h1>082245893329</h1>
                <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
                    molestias.</p>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container">
                <h3 class="text-center">Data Pengaduan</h3>

                <div class="row">
                    <!-- Card Item 1 - Proses -->
                    <div class="col-md-4">
                        <a href="{{ route('pengaduan_driver.detail') }}">
                            <div class="card border-gray bg-light">
                                <div class="card-body d-flex justify-content-between">
                                    <div>
                                        <h5 class="card-title">Jack Ma</h5>
                                        <p class="card-text">Driver 1</p>
                                        <p class="card-text">01 Januari 2025</p>
                                    </div>
                                    <img src="assetsGuest/img/page-title-bg.jpg" alt="Light Blue Chair"
                                        class="status-image">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-gray bg-light">
                            <div class="card-body d-flex justify-content-between">
                                <div>
                                    <h5 class="card-title">Jack Ma</h5>
                                    <p class="card-text">Driver 2</p>
                                    <p class="card-text">01 Januari 2025</p>
                                </div>
                                <img src="assetsGuest/img/page-title-bg.jpg" alt="Light Blue Chair" class="status-image">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-gray bg-light">
                            <div class="card-body d-flex justify-content-between">
                                <div>
                                    <h5 class="card-title">Jack Ma</h5>
                                    <p class="card-text">Driver 3</p>
                                    <p class="card-text">01 Januari 2025</p>
                                </div>
                                <img src="assetsGuest/img/page-title-bg.jpg" alt="Light Blue Chair" class="status-image">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-gray bg-light">
                            <div class="card-body d-flex justify-content-between">
                                <div>
                                    <h5 class="card-title">Jack Ma</h5>
                                    <p class="card-text">Driver 4</p>
                                    <p class="card-text">01 Januari 2025</p>
                                </div>
                                <img src="assetsGuest/img/page-title-bg.jpg" alt="Light Blue Chair" class="status-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Service Details Section -->
    </main>
@endsection
