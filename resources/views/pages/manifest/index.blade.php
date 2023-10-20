@extends('layout.master')
@section('title', 'Manifest')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Manifest</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tabel Manifest</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="surat_jalan" class="table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No Manifest
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Manifest
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Cetak
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Asal
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tujuan
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Total Koli
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Berat (Kg)
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Dibuat Oleh
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">FKGSA21</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">2 Oktober 2023</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">3 Oktober 2023</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Jakarta</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Surabaya</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1/1</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">11</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Febri</p>
                                    </td>
                                    <td>
                                        <button href="" type="button" class="btn btn-secondary mx-1" onclick="editManifestModal()">
                                            <i class="align-middle" data-feather="list"></i> Edit
                                        </button>


                                        <a href="/manifest/detail" type="button" class="btn btn-warning mx-1">
                                            <i class="align-middle" data-feather="edit"></i> Detail
                                        </a>
                                        <a href="" type="button" class="btn btn-danger mx-1">
                                            <i class="align-middle" data-feather="trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editManifestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No Manifest</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="FKGSA21">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Manifest</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" value="2023-10-02">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Cetak</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" value="2023-10-03">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Asal</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Jakarta">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tujuan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Surabaya">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Total Koli</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="1/1" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Berat (Kg)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" value="11" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Dibuat Oleh</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Febri">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#surat_jalan').DataTable({
            "language": {
                "paginate": {
                    "previous": "<",
                    "next": ">"
                }
            },
            dom: 'Bfrtip',
            buttons: [{
                    text: 'Tambah Data', // Label tombol
                    action: function(e, dt, node, config) {
                        window.location.href = '/manifest/tambah';


                    }
                },
                {
                    extend: 'excel',
                    text: 'Excel',

                    filename: 'data_manifest', // Ubah nama file sesuai kebutuhan
                },
                {
                    extend: 'print',
                    text: 'Print',

                },
                {
                    extend: 'pageLength',
                    text: 'Page',
                },
            ]

        });
    });
    $(document).ready(function() {

    });

    function editManifestModal() {
        $("#editManifestModal").modal('show')
        // e.preventDefault();
    };
</script>
@endpush