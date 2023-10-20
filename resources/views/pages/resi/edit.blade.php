@extends('layout.master')
@section('title', 'Edit Surat Jalan')
@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Edit Surat Jalan</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Form Edit Surat Jalan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Kota Asal</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="asal" placeholder="Asal" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Kota Tujuan</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="tujuan" placeholder="Tujuan" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3 row">
                                    <h5 class="card-title mx-1 mb-2">Pembayaran</h5>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" name="pembayaran" placeholder="Pembayaran" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3 row">
                                    <h5 class="card-title mx-1 mb-2">Penanganan</h5>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" name="penanganan" placeholder="Penanganan" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Layanan</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="layanan" placeholder="Layanan" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Asuransi</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="asuransi" placeholder="Asuransi" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Non / COD</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="status_cod" placeholder="Non / COD" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Nilai COD</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="nilai_cod" placeholder="Nilai COD" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-3">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Jumlah</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="jumlah" placeholder="Jumlah" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Berat</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="berat" placeholder="Berat" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Tipe</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="tipe_kiriman" placeholder="Tipe Kiriman" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Paking</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="paking" placeholder="Paking" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Shipper / Pengirim</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="pengirim" placeholder="Pengirim" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Attention</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="attention_pengirim" placeholder="Attention" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row mt-3">
                                            <h5 class="card-title mx-1 mb-2">Deskripsi</h5>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" rows="4" name="deskripsi" placeholder="Deskripsi" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row mt-3">
                                            <h5 class="card-title mx-1 mb-2">Keterangan</h5>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" rows="4" name="keterangan" placeholder="Keterangan" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Reciver / Penerima</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="penerima" placeholder="Penerima" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <h5 class="card-title mx-1 mb-2">Attention</h5>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="#" name="attention_penerima" placeholder="Attention" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <h5 class="card-title mx-1 mb-2">No Telp</h5>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" name="telp" placeholder="No Telp" required>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <h5 class="card-title mx-1 mb-2">Alamat</h5>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" rows="4" name="alamat_penerima" placeholder="Alamat" required></textarea>
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
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    
@endpush
