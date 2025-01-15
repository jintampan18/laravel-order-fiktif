@extends('layouts.app')

@section('style')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('wrapper')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Data Pengaduan</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Pengaduan</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table align-middle mb-0" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Name Customer</th>
                                    <th>Name Driver</th>
                                    <th>Status Aduan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($complaints as $item)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $item->name_customer }}</td>
                                        <td>{{ $item->user->username }}</td>
                                        <td>
                                            @if ($item->status_aduan === 'verifikasi')
                                                <div class="d-flex align-items-center text-success"> <i
                                                        class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                    <span>Verifikasi</span>
                                                </div>
                                            @else
                                                <div class="d-flex align-items-center text-danger"> <i
                                                        class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                    <span>Tolak</span>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="#" class="" data-bs-toggle="modal"
                                                    data-bs-target="#editData{{ $item->id }}">
                                                    <i class="bx bxs-edit text-secondary"></i>
                                                </a>

                                                <a href="#" class="ms-4">
                                                    <i class='bx bxs-trash text-danger'></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
@endsection

@section('script')
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
