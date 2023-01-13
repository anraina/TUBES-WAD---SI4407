@extends('layoutsmain.main')

@section('container')
@php
$tomorrow = date("l, Y-m-d", strtotime("+2 day"));
@endphp
<div class="p-5 m-5">
    
    <div class="container">
        <h2 class="fw-bold text-center mb-3">Info Pembayaran</h2>
        <div class="container bg-light py-3">
        <h5 class="fw-bold mb-1">Jumlah yang harus dibayar</h5>
        <h5 class="text-danger mb-1">Rp{{ $pesanan->totalHarga }}</h5>
        </div>
        <div class="bg-secondary px-2 py-1">
          <p class="text-light fw-light m-0">
            Silahkan transfer ke pilihan rekening dibawah ini.
            </p>
        </div>
        <div class="row p-3">
          <div class="col">
              <div class="d-flex">
                <div class="me-3">
                  <img src="https://cdn-2.tstatic.net/madura/foto/bank/images/logo-bri-dibuka-lowongan-kerja-di-bank-bri-untuk-lulusan-s1-dan-s2-untuk-september.jpg" class="gambarproduct" alt="">
                </div>
                <div class="">
                  <label for="" class="form-label fw-bold">Bank BRI</label>
                </div>
              </div>
              <p>No. Rekening: 08213912939 <br>
                Nama Rekening: AlvaTours
              </p>
          </div>
          <div class="col">
              <div class="d-flex">
                <div class="me-3">
                  <img src="https://rekreartive.com/wp-content/uploads/2019/04/Logo-BNI-Bank-Negara-Indonesia-46-Vector-.png" class="gambarproduct" alt="">
                </div>
                <div class="">
                  <label for="" class="form-label fw-bold">Bank BNI</label>
                </div>
              </div>
              <p>No. Rekening: 08129192399 <br>
                Nama Rekening: AlvaTours
              </p>
          </div>
          <div class="col">
              <div class="d-flex">
                <div class="me-3">
                  <img src="https://logos-download.com/wp-content/uploads/2016/06/Bank_Mandiri_logo_white_bg.png" class="gambarproduct" alt="">
                </div>
                <div class="">
                  <label for="" class="form-label fw-bold">Bank Mandiri</label>
                </div>
              </div>
              <p>No. Rekening: 100299930122 <br>
                Nama Rekening: AlvaTours
              </p>
          </div>
          <div class="col">
              <div class="d-flex">
                <div class="me-3">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/2560px-Bank_Central_Asia.svg.png" class="gambarproduct" alt="">
                </div>
                <div class="">
                  <label for="" class="form-label fw-bold">Bank BCA</label>
                </div>
              </div>
              <p>No. Rekening: 120293391293 <br>
                Nama Rekening: AlvaTours
              </p>
          </div>
        </div>
        <div class="bg-secondary px-2 py-1">
          <p class="text-light fw-light m-0">
            Silahkan Upload Foto Bukti transfer dibawah ini sebelum <b class="text-light fw-bold"><?= $tomorrow ?></b>
            </p>
        </div>
        <div class="p-3 bg-light">
          <form action="{{ route('pemesanan.update', $pesanan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label class="form-label fw-bold" for="buktiTf">Upload Bukti Pembayaran</label>
              <input hidden type="text" class="form-control" id="status" name="status" value="Bukti Terkirim - Menunggu Verifikasi">
              
              <input type="file" class="form-control" id="buktiTf" name="buktiTf">
            </div>
            <div class="text-center ">
                <button class="btn btn-primary w-auto" type="submit" name="submit">Kirim Bukti Transfer</button>
            </div>
          </form>
        </div>
        <div class="d-flex mt-3">
          <div class="me-auto">
            <a href="/" class="btn btn-outline-success ">Kembali Ke Beranda</a>
          </div>
          <div>
            <a href="/riwayatpesanan" class="btn btn-success ">Cek Status Pemesanan</a>
          </div>
        </div>
    </div>
</div>
@endsection