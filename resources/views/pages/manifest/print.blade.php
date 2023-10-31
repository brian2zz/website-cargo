<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Jalan</title>
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        .barcode {
            display: block;
            /* Pastikan elemen barcode terlihat saat mencetak */
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            width: 100%;
            max-width: 800px;
            /* Atur lebar maksimum konten sesuai kebutuhan */
            margin: 0 auto;
            padding: 20px;
        }

        /* Tambahkan gaya CSS lainnya di sini */
    </style>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-1 mx-n4">
                    <img src="{{ asset('img/logo/logo.png') }}" style="width:105px; height:70px;" alt="logo">
                </div>
                <div class="col-3 mt-2 border-1" style="margin-left:50px;">
                    <p style="font-size: 9px;" class="my-0 text-uppercase "><strong>Teratai Jaya
                            Logistic</strong></p>
                    <p style="font-size: 8px;" class="my-0">Kantor Pusat : Ruko Sentra Niaga, Blok T19/73. Citra
                        Raya, kel. Cikupa, kec. Cikupa, Tanggerang, Banten 15710</p>
                    <p style="font-size: 8px;" class="my-0">Telp : 0876-9558-5875</p>
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
                <div class="col-8 mx-n2">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Asal</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Jumlah</span>
                                    <p style="font-size: 10x;" class="my-0 text-uppercase"><strong>1</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Tujuan</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Berat</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Pembayaran</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Layanan</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Penanganan</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Non / COD</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Asuransi</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Nilai COD</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Paking</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: 8px;" class="my-1">Tipe Paket</span>
                                    <p style="font-size: 10px;" class="my-0 text-uppercase"><strong>adsadas</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-2">
                <div class="d-flex justify-content-center">
                    <span style="font-size: 12px;">Nomor Resi :</span>
                </div>
                <div class="d-flex justify-content-center barcode">
                    {!! DNS1D::getBarcodeSVG('asdasdasdadsasd', 'C128', 1, 30,true) !!}
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6" style="border-style: none none none solid; border-left-width: 1px;">
                    <div class="row">
                        <div class="col-10">
                            <p style="font-size: 8px;">Shipper/Pengirim</p>
                            <p style="font-size: 12px;" class="text-uppercase text-black mt-n3"><strong>Manifest</strong></p>
                            <p style="font-size: 8px;" class="text-uppercase text-black mt-2"><strong>Attention :
                                    asdasdasd</strong></p>
                            <p style="font-size: 8px;" class="mt-n2">Deskripsi Item :</p>
                            <textarea name="deskripsi" id="deskripsi" style="resize:none; font-size: 8px;" class="border-0 bg-transparent mt-n3" disabled cols="30" rows="3">asdasd</textarea>
                            <p style="font-size: 8px;">Special Intruction / Intruksi Khusus :</p>
                            <textarea name="intruction" id="intruction" style="resize:none; font-size: 8px;" class="border-0 bg-transparent mt-n3" disabled cols="30" rows="2">asdasd</textarea>
                            <p style="font-size: 8px;">Diambil Pada Tanggal :</p>
                            <div class="row">
                                <div class="col mt-n3">
                                    <p style="font-size: 8px;">Date / Tanggal : 10-10-2023</p>
                                </div>
                                <div class="col mt-n3">
                                    <p style="font-size: 8px;">Time / Jam : 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="border-style: none none none solid; border-left-width: 1px;">
                    <p style="font-size: 8px;">Reciver/Penerima</p>
                    <p style="font-size: 12px;" class="text-uppercase text-black mt-n3"><strong>MA bilingual Al-Amanah</strong></p>
                    <p style="font-size: 8px;">Alamat :</p>
                    <textarea name="deskripsi" id="deskripsi" style="resize:none; font-size: 8px;" class="border-0 bg-transparent mt-n3" disabled cols="50" rows="3">asdasd</textarea>
                    <p style="font-size: 8px;" class="text-uppercase text-black"><strong>Attention :
                            asdasdasd</strong></p>
                    <p style="font-size: 8px;" class="mt-n3">Shipper Signature & Stamp / Tanda Tangan & Stample Penerima</p>
                    <textarea name="intruction" id="intruction" style="resize:none; font-size: 8px;" class="border-0 bg-transparent mt-n3" disabled cols="30" rows="3"></textarea>
                    <p style="font-size: 8px;">Signature / Tanda Tangan</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('../js/app.js') }}"></script>
</body>

</html>