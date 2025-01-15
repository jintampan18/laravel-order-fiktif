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
            <div class="container mt-5">
                <h1 class="text-center">Form Pengaduan</h1>
                <form action="{{ route('pengaduan_driver.index') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="driverName" class="form-label">Nama Driver</label>
                        <input type="text" id="driverName" class="form-control" value="Nama Driver" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="customerName" class="form-label">Nama Customer</label>
                        <input type="text" id="customerName" name="customerName" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="customerNumber" class="form-label">Nomor Customer</label>
                        <input type="text" id="customerNumber" name="customerNumber" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="complaintType" class="form-label">Jenis Aduan</label>
                        <select id="complaintType" name="complaintType" class="form-select" required>
                            <option value="" disabled selected>Pilih jenis aduan</option>
                            <option value="service">Layanan</option>
                            <option value="delivery">Pengiriman</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="notes" class="form-label">Catatan</label>
                        <textarea id="notes" name="notes" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="screenshot" class="form-label">Upload Bukti SS</label>
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
