@extends('pages.guest.layouts.app')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{ asset('assetsGuest/img/world-dotted-map.png') }}" alt="" class="hero-bg" data-aos="fade-in">

            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">Aplikasi Informasi Orderan Fiktif</h2>
                        <p data-aos="fade-up" data-aos-delay="100">Di Silapor, kami menyediakan platform yang
                            aman dan mudah untuk melaporkan orderan fiktif.
                            Dapatkan keadilan dan dukungan yang Anda butuhkan sebagai driver. Bergabunglah dengan kami dan
                            nikmati pengalaman kerja yang lebih baik!</p>

                        <form action="{{ route('guest.list_aduan') }}" method="GET"
                            class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                            <input type="text" name="customer_number" class="form-control"
                                placeholder="Masukkan Nomor Customer" required>
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ asset('assetsGuest/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0"
                            alt="">
                    </div>

                </div>
            </div>

        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    {{-- <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <img src="assetsGuest/img/about.jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                    </div> --}}

                    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>About Us</h3>
                        <p>
                            Di SiLapor, kami memahami tantangan yang dihadapi oleh para driver,
                            terutama ketika berurusan dengan orderan fiktif. Kami hadir untuk memberikan solusi yang cepat
                            dan efektif bagi Anda yang ingin melaporkan masalah ini.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h5>Pengaduan Mudah dan Cepat</h5>
                                    <p>Dengan fitur ini, Anda dapat mengajukan pengaduan terkait orderan fiktif dengan
                                        mudah</p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h5>Pelacakan Status Pengaduan</h5>
                                    <p>Setelah mengajukan pengaduan, Anda dapat melacak status pengaduan Anda secara
                                        real-time</p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-broadcast"></i>
                                <div>
                                    <h5>Dukungan Khusus untuk Driver</h5>
                                    <p>Kami menyediakan layanan dukungan yang siap membantu Anda kapan saja</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </section>
        <!-- /About Section -->
    </main>
@endsection
