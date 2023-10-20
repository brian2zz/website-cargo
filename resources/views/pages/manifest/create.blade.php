@extends('layout.master')
@section('title', 'Manifest')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Tambah Manifest</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="margin: 20px;">
                    <h5 class="card-title mb-0">Form Tambah Manifest</h5>
                </div>
                <div class="card-body" style="margin: 20px;">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group row">
                                        <h5 class="card-title mx-1 mb-2">No Manifest</h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="#" name="noManifest" placeholder="No Manifest" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-10">
                                    <div class="form-group row">
                                        <h5 class="card-title mx-1 mb-2">Dibuat Oleh</h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="#" name="dibuatOleh" placeholder="Dibuat Oleh" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div style="margin-top: 80px;">
                                <div class="row mt-3">
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Total Koli</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="totalKoli" placeholder="Total Koli" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Berat</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="berat" placeholder="Berat" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <h5 class="card-title mx-1 mb-2">Tanggal Manifest</h5>
                                        <div class="col-sm-12">
                                            <input type="date" class="form-control" id="#" name="tanggalManifest" placeholder="Tanggal Manifest" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <h5 class="card-title mx-1 mb-2">Tanggal Cetak</h5>
                                        <div class="col-sm-12">
                                            <input type="date" class="form-control" id="#" name="tanggalCetak" placeholder="Tanggal Cetak" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <h5 class="card-title mx-1 mb-2">Kota Asal</h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="#" name="kotaAsal" placeholder="Kota Asal" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <h5 class="card-title mx-1 mb-2">Kota Tujuan</h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="#" name="kotaTujuan" placeholder="Kota Tujuan" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row mt-3">
                                        <h5 class="card-title mx-1 mb-2">Keterangan</h5>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" rows="4" name="keterangan" placeholder="Keterangan" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group d-flex justify-content-end">
                    <a href="/surat-jalan" type="button" class="btn btn-danger mx-3">
                        kembali
                    </a>
                    <button type="submit" class="btn btn-success">Tambah</button>
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