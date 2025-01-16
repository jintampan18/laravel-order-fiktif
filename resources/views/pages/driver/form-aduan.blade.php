@extends('pages.guest.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assetsGuest/img/page-title-bg.jpg') }});">
            <div class="container position-relative">
                <h2>Pengaduan</h2>
                <p>Pastikan untuk menyertakan detail yang jelas mengenai masalah yang Anda hadapi, termasuk nomor order,
                    deskripsi masalah, dan bukti pendukung jika ada. </p>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container">
                <form action="{{ route('pengaduan_driver.kirim_aduan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <strong for="driverName" class="form-label">Nama Driver</strong>
                        <input type="text" id="driverName" class="form-control" value="{{ Auth::user()->username }}"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <strong for="customerName" class="form-label">Nama Customer</strong>
                        <input type="text" id="customerName" name="customerName" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <strong for="customerNumber" class="form-label">Nomor Customer</strong>
                        <input type="text" id="customerNumber" name="customerNumber" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <strong for="complaintType" class="form-label">Jenis Aduan</strong>
                        <select id="complaintType" name="complaintType" class="form-select" required>
                            <option value="" disabled selected>Pilih jenis aduan</option>
                            @foreach ($jenis_aduans as $aduan)
                                <option value="{{ $aduan->id }}">
                                    {{ $aduan->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <strong for="notes" class="form-label">Catatan</strong>
                        <textarea id="notes" name="notes" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <strong for="screenshot" class="form-label">Upload Bukti SS</strong>
                        <input type="file" id="screenshot" name="screenshot" class="form-control" accept="image/*"
                            required onchange="previewImage(event)">
                        <img id="preview" class="img-fluid mt-2" src="#" alt="Preview" style="display: none;">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
                    </div>
                </form>
            </div>

            <script>
                function previewImage(event) {
                    const preview = document.getElementById('preview');
                    const file = event.target.files[0];
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    }

                    if (file) {
                        reader.readAsDataURL(file);
                    } else {
                        preview.src = '#';
                        preview.style.display = 'none';
                    }
                }
            </script>
        </section><!-- /Service Details Section -->
    </main>
@endsection
