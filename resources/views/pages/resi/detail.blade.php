<div class="modal fade" id="detailSuratJalan" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Surat Jalan</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-1 mx-n4">
                            <img src="{{ asset('img/logo/logo.png') }}" style="width:135px; height:100px;"
                                alt="logo">
                        </div>
                        <div class="col-3 mx-5 mt-2">
                            <p style="font-size: 12px;" class="my-0 text-uppercase "><strong>Teratai Jaya
                                    Logistic</strong></p>
                            <p style="font-size: 11px;"class="my-0">Kantor Pusat : Ruko Sentra Niaga, Blok T19/73. Citra
                                Raya, kel. Cikupa, kec. Cikupa, Tanggerang, Banten 15710</p>
                            <p style="font-size: 11px;"class="my-0">Telp : 0876-9558-5875</p>
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
                <button type="button" onclick="printPage()" class="btn btn-primary">Print</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
