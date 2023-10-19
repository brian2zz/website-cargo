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
                                        Tanggal Manifest
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Cetak
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No Manifest
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Koli
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Berat (Kg)
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Asal
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tujuan
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
                                        <p class="text-xs font-weight-bold mb-0">2 Oktober 2023</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">3 Oktober 2023</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">FKGSA21</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1/1</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">11</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Jakarta</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Surabaya</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Febri</p>
                                    </td>
                                    <td>
                                        <a href="" type="button" class="btn btn-secondary mx-1" onclick="edit()">
                                            <i class="align-middle" data-feather="list"></i> Edit
                                        </a>

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

                    filename: 'data_resi', // Ubah nama file sesuai kebutuhan
                },
                {
                    extend: 'print',
                    text: 'Data',

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

    // function edit() {
    //     $("#editProduk").modal('show')
    //     // e.preventDefault();
    // };
</script>
@endpush