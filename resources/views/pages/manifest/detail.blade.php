@extends('layout.master')
@section('title', 'Manifest')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Detail Manifest</h1>

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
                                        No Resi
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Package Id
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Penerima
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tujuan
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Layanan
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Koli
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Berat (Kg)
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tipe Kiriman
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Keterangan
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- No -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <!-- No Resi -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">2 Oktober 2023</p>
                                    </td>
                                    <!-- Package ID -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">SSFSAKAN-0001</p>
                                    </td>
                                    <!-- Nama Penerima -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Ardi</p>
                                    </td>
                                    <!-- Tujuan -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Surabaya</p>
                                    </td>
                                    <!-- Jenis Layanan -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">UNREG</p>
                                    </td>
                                    <!-- Koli -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1/1</p>
                                    </td>
                                    <!-- Berat -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <!-- Tipe Kiriman -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Paket</p>
                                    </td>
                                    <!-- Keterangan -->
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Buku</p>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning mx-1" onclick="editResiModal()">
                                            <i class="align-middle" data-feather="edit"></i> Edit
                                        </button>

                                        <a href="#" type="button" class="btn btn-danger mx-1">
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

<!-- Modal Edit Resi -->
<div class="modal fade" id="editResiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- No Resi -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No Resi</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="FKGSA21">
                </div>
                <!-- Package ID -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Package ID</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="2023-10-02">
                </div>
                <!-- Nama Penerima -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Penerima</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="2023-10-03">
                </div>
                <!-- Tujuan -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tujuan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Jakarta">
                </div>
                <!-- Jenis Layanan -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Layanan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Surabaya">
                </div>
                <!-- Koli -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Koli</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="1/1">
                </div>
                <!-- Berat -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Berat (Kg)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" value="11">
                </div>
                <!-- Tipe Kiriman -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipe Kiriman</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Febri">
                </div>
                <!-- Keterangan -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Febri">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Print Manifest -->
<div class="modal fade" id="printManifest" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Manifest</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">

                    <div class="row">
                        <div class="col-1 mx-n4">
                            <img src="{{ asset('img/logo/logo.png') }}" style="width:135px; height:100px;" alt="logo">
                        </div>
                        <div class="col-3 mx-5 mt-2">
                            <p style="font-size: 12px;" class="my-0 text-uppercase "><strong>Teratai Jaya
                                    Logistic</strong></p>
                            <p style="font-size: 11px;" class="my-0">Kantor Pusat : Ruko Sentra Niaga, Blok T19/73. Citra
                                Raya, kel. Cikupa, kec. Cikupa, Tanggerang, Banten 15710</p>
                            <p style="font-size: 11px;" class="my-0">Telp : 0876-9558-5875</p>
                            {{-- <div class="row">
                                <div class="col">
                                    <strong style="font-size: 11px;" class="my-1">Nomor Akun</strong>
                                    <p style="font-size: 11px;" class="my-0">asdasads</p>
                                </div>
                                <div class="col">
                                    <strong style="font-size: 11px;" class="my-1">Nomor Referensi</strong>
                                    <p style="font-size: 11px;" class="my-0">asdasasd</p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Asal</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Jumlah</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>1</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Tujuan</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Berat</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Pembayaran</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Layanan</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Penanganan</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Non / COD</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Asuransi</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Nilai COD</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Paking</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 11px;" class="my-1">Tipe Paket</span>
                                    <p style="font-size: 14px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <div class="d-flex justify-content-center">
                            <span>Nomor Resi :</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! DNS1D::getBarcodeHTML('asdasdasdadsasd', "C128",1.4,22) !!}
                        </div>
                        <div class="d-flex justify-content-center">
                            <span>asdasdasdadsads</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6" style="border-style: none none none solid; border-left-width: 1px;">
                            <div class="row">
                                <div class="col-8">
                                    <p style="font-size: 11px;">Shipper/Pengirim</p>
                                    <h5 class="text-uppercase mt-2"><strong>Ruang Guru Ruangguru Privat Jogja</strong></h5>
                                    <p style="font-size: 11px;" class="text-uppercase text-black mt-2"><strong>Attention : asdasdasd</strong></p>
                                    <p style="font-size: 11px;">Deskripsi Item :</p>
                                    <textarea name="deskripsi" id="deskripsi" style="resize:none; font-size: 11px;" class="border-0 bg-transparent mt-n3" disabled cols="30" rows="3">asdasd</textarea>
                                    <p style="font-size: 11px;">Special Intruction / Intruksi Khusus :</p>
                                    <textarea name="intruction" id="intruction" style="resize:none; font-size: 11px;" class="border-0 bg-transparent mt-n3" disabled cols="30" rows="2">asdasd</textarea>
                                    <p style="font-size: 11px;">Diambil Pada Tanggal :</p>
                                    <div class="row">
                                        <div class="col mt-n3">
                                            <p style="font-size: 11px;">Date / Tanggal : 10-10-2023</p>
                                        </div>
                                        <div class="col mt-n3">
                                            <p style="font-size: 11px;">Time / Jam : 10:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6" style="border-style: none none none solid; border-left-width: 1px;">
                            <p style="font-size: 11px;">Reciver/Penerima</p>
                            <h5 class="text-uppercase mt-2"><strong>MA bilingual Al-Amanah</strong></h5>
                            <p style="font-size: 11px;">Alamat :</p>
                            <textarea name="deskripsi" id="deskripsi" style="resize:none; font-size: 11px;" class="border-0 bg-transparent mt-n3" disabled cols="50" rows="3">asdasd</textarea>
                            <p style="font-size: 11px;" class="text-uppercase text-black mt-2"><strong>Attention : asdasdasd</strong></p>
                            <p style="font-size: 11px;">Shipper Signature & Stamp / Tanda Tangan & Stample Penerima</p>
                            <textarea name="intruction" id="intruction" style="resize:none; font-size: 11px;" class="border-0 bg-transparent mt-n3" disabled cols="30" rows="3"></textarea>
                            <p style="font-size: 11px;">Signature / Tanda Tangan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="printManifest()" class="btn btn-primary">Print</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                    // extend: 'print',
                    text: 'Print',
                    action: function() {
                        $("#printManifest").modal('show');
                    },

                },
                {
                    extend: 'pageLength',
                    text: 'Page',
                },
            ]

        });
    });

    function editResiModal() {
        $("#editResiModal").modal('show')
        // e.preventDefault();
    };

    function printManifest() {
        // Mendapatkan HTML dari konten yang ingin dicetak
        const contentToPrint = document.createElement('iframe');
        contentToPrint.style.display = 'none';
        contentToPrint.src = '/manifest/detail/print/1';

        document.body.appendChild(contentToPrint);
        contentToPrint.contentWindow.focus();
        contentToPrint.contentWindow.print();
    }
</script>
@endpush