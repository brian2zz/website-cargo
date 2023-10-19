@extends('layout.master')
@section('title', 'Surat Jalan')
@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Surat Jalan</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Tabel Surat Jalan</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="surat_jalan" class="table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor Resi
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Penerima
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tujuan
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Koli
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Berat (Kg)
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tipe Pengiriman
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jenis Layanan
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">adsasd123123asd</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Ma Bilingual Al Amanah</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Sidoarjo</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Udara</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">1/1</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">11</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Paket</p>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <a href="#" type="button" class="btn btn-sm btn-info mx-1 my-1"
                                                    data-bs-toggle="modal" data-bs-target="#detailSuratJalan">
                                                    <i class="align-middle" data-feather="list"></i> Detail
                                                </a>

                                                <a href="/surat-jalan/edit/1" type="button"
                                                    class="btn btn-sm btn-warning mx-1 my-1">
                                                    <i class="align-middle" data-feather="edit"></i> Edit
                                                </a>
                                                <a href="#" type="button" class="btn btn-sm btn-danger mx-1 my-1">
                                                    <i class="align-middle" data-feather="trash"></i> Hapus
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">adsasd123123asd</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Ma Bilingual Al Amanah</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Sidoarjo</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Udara</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">1/1</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">11</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Paket</p>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <a href="#" type="button" class="btn btn-sm btn-info mx-1 my-1"
                                                    data-bs-toggle="modal" data-bs-target="#detailSuratJalan">
                                                    <i class="align-middle" data-feather="list"></i> Detail
                                                </a>

                                                <a href="/surat-jalan/edit/1" type="button"
                                                    class="btn btn-sm btn-warning mx-1 my-1">
                                                    <i class="align-middle" data-feather="edit"></i> Edit
                                                </a>
                                                <a href="#" type="button" class="btn btn-sm btn-danger mx-1 my-1">
                                                    <i class="align-middle" data-feather="trash"></i> Hapus
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">adsasd123123asd</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Ma Bilingual Al Amanah</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Sidoarjo</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Udara</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">1/1</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">11</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Paket</p>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <a href="#" type="button" class="btn btn-sm btn-info mx-1 my-1"
                                                    data-bs-toggle="modal" data-bs-target="#detailSuratJalan">
                                                    <i class="align-middle" data-feather="list"></i> Detail
                                                </a>

                                                <a href="/surat-jalan/edit/1" type="button"
                                                    class="btn btn-sm btn-warning mx-1 my-1">
                                                    <i class="align-middle" data-feather="edit"></i> Edit
                                                </a>
                                                <a href="#" type="button" class="btn btn-sm btn-danger mx-1 my-1">
                                                    <i class="align-middle" data-feather="trash"></i> Hapus
                                                </a>
                                            </div>
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
    @include('pages.resi.detail')
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
                            window.location.href = '/surat-jalan/tambah';
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'Excel',

                        filename: 'data_resi', // Ubah nama file sesuai kebutuhan
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
    </script>
@endpush
