@extends('layouts.app')
@section('style')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                {{-- Information Driver --}}
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Driver</p>
                                    <h4 class="my-1">{{ $totalDrivers }}</h4>
                                </div>
                                <div class="widgets-icons bg-light-success text-success ms-auto"><i
                                        class='bx bxs-wallet'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Driver Active</p>
                                    <h4 class="my-1">{{ $totalActiveDrivers }}</h4>
                                </div>
                                <div class="widgets-icons bg-light-warning text-warning ms-auto"><i
                                        class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Driver Deactive</p>
                                    <h4 class="my-1">{{ $totalDeactiveDrivers }}</h4>

                                </div>
                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i
                                        class='bx bxs-binoculars'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Information Pengaduan order fiktif --}}
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Pengaduan</p>
                                    <h4 class="my-1">{{ $totalComplaints }}</h4>
                                </div>
                                <div class="widgets-icons bg-light-success text-success ms-auto"><i
                                        class='bx bxs-wallet'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Pengaduan : Proses</p>
                                    <h4 class="my-1">{{ $totalComplaintsInProcess }}</h4>
                                </div>
                                <div class="widgets-icons bg-light-warning text-warning ms-auto"><i
                                        class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Pengaduan : Verifikasi</p>
                                    <h4 class="my-1">{{ $totalComplaintsInVerification }}</h4>

                                </div>
                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i
                                        class='bx bxs-binoculars'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Pengaduan : Tolak</p>
                                    <h4 class="my-1">{{ $totalComplaintsRejected }}</h4>
                                </div>
                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i
                                        class='bx bxs-binoculars'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="assets/js/index.js"></script>
@endsection
