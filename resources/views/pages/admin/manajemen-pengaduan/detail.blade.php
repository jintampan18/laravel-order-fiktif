@extends('layouts.app')

@section('wrapper')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Detail Pengaduan</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $complaint->name_customer }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card mt-4">
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
    </div>
@endsection
