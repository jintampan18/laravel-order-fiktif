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
                                    <th>Tanggal Aduan</th>
                                    <th>View Details</th>
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
                                                <div
                                                    class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
                                                    <i class='bx bxs-circle me-1'></i>Verifikasi
                                                </div>
                                            @elseif ($item->status_aduan === 'proses')
                                                <div
                                                    class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3">
                                                    <i class='bx bxs-circle me-1'></i>Proses
                                                </div>
                                            @else
                                                <div
                                                    class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">
                                                    <i class='bx bxs-circle me-1'></i>Tolak
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</td>
                                        <td>
                                            <a href="{{ route('pengaduan.detail', $item->id) }}">
                                                <button type="button" class="btn btn-primary btn-sm radius-30 px-4">
                                                    View Details
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="#" class="" data-bs-toggle="modal"
                                                    data-bs-target="#editStatus{{ $item->id }}">
                                                    <i class="bx bxs-edit text-secondary"></i>
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="editStatus{{ $item->id }}" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Ubah Status Aduan</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('pengaduan.ubah_status', $item->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="mb-3">
                                                                        <label for="status" class="form-label">Status
                                                                            Aduan</label>
                                                                        <select class="form-select" id="status"
                                                                            name="status_aduan" required>
                                                                            <option value="" disabled selected>Pilih
                                                                                Status Aduan</option>
                                                                            <option value="proses"
                                                                                {{ $item->status_aduan == 'proses' ? 'selected' : '' }}>
                                                                                Proses</option>
                                                                            <option value="verifikasi"
                                                                                {{ $item->status_aduan == 'verifikasi' ? 'selected' : '' }}>
                                                                                Verifikasi</option>
                                                                            <option value="tolak"
                                                                                {{ $item->status_aduan == 'tolak' ? 'selected' : '' }}>
                                                                                Tolak</option>
                                                                        </select>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary">Simpan
                                                                    Perubahan</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

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
