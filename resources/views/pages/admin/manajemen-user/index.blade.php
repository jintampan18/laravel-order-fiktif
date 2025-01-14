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
                <div class="breadcrumb-title pe-3">Data User</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data User</li>
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
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($driver as $item)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>{{ $item->user->username }}</td>
                                        <td>
                                            @if ($item->user->status === 'active')
                                                <div class="d-flex align-items-center text-success"> <i
                                                        class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                    <span>Aktif</span>
                                                </div>
                                            @else
                                                <div class="d-flex align-items-center text-danger"> <i
                                                        class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                    <span>Tidak aktif</span>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="#" class="" data-bs-toggle="modal"
                                                    data-bs-target="#editData{{ $item->user->id }}">
                                                    <i class="bx bxs-edit text-secondary"></i>
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="editData{{ $item->user->id }}" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Driver</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('driver.update', $item->user->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="mb-3">
                                                                        <label for="email"
                                                                            class="form-label">Email</label>
                                                                        <input type="email" class="form-control"
                                                                            id="email" name="email"
                                                                            value="{{ $item->user->email }}" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="username"
                                                                            class="form-label">Username</label>
                                                                        <input type="text" class="form-control"
                                                                            id="username" name="username"
                                                                            value="{{ $item->user->username }}" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="password"
                                                                            class="form-label">Password</label>
                                                                        <input type="password" class="form-control"
                                                                            id="password" name="password"
                                                                            placeholder="Kosongkan jika tidak ingin mengubah">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="phone_number" class="form-label">Nomor
                                                                            Telepon</label>
                                                                        <input type="text" class="form-control"
                                                                            id="phone_number" name="phone_number"
                                                                            value="{{ $item->phone_number }}" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="address"
                                                                            class="form-label">Alamat</label>
                                                                        <input type="text" class="form-control"
                                                                            id="address" name="address"
                                                                            value="{{ $item->address }}" required>
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

                                                <a href="#" class="ms-4"
                                                    onclick="toggleStatus('{{ $item->user->id }}', '{{ $item->user->status }}')">
                                                    @if ($item->user->status === 'active')
                                                        <i class='bx bxs-trash text-danger'></i>
                                                    @else
                                                        <i class='bx bxs-check-circle text-success'></i>
                                                    @endif
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

    <script>
        function toggleStatus(userId, currentStatus) {
            if (confirm('Apakah Anda yakin ingin mengubah status akun ini?')) {
                const url = `/driver/${userId}/status`;

                // Menggunakan fetch API untuk mengirim permintaan PUT
                fetch(url, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            status: currentStatus === 'active' ? 'deactive' : 'active'
                        })
                    })
                    .then(response => {
                        if (response.ok) {
                            location.reload();
                        } else {
                            alert('Terjadi kesalahan saat mengubah status');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat mengubah status.');
                    });
            }
        }
    </script>
@endsection
