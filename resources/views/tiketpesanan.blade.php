@extends('layoutsmain.main')

@section('container')

<div class="p-5 m-5">
    
    <div class="container">
        <h2 class="fw-bold text-center mb-3">Tiket Pesanan</h2>
        <div class="mb-3 border  rounded p-3">
          <div class="row">
              
              <div class="col-10">
                  <div class="row">
                      <div class="col-2">
                          <label for="exampleFormControlInput1" class="form-label">No Pesanan</label>
                      </div>
                      <div class="col-10">
                          <label for="exampleFormControlInput1" class="form-label">: {{ $pesanan->id }}</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-2">
                          <label for="exampleFormControlInput1" class="form-label">Tanggal Pesan</label>
                      </div>
                      <div class="col-10">
                          <label for="exampleFormControlInput1" class="form-label">: {{ $pesanan->created_at }}</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-2">
                          <label for="exampleFormControlInput1" class="form-label">Subtotal</label>
                      </div>
                      <div class="col-10">
                          <label for="exampleFormControlInput1" class="form-label">: Rp{{ $pesanan->totalHarga }}</label>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        
        
        <div class="bg-secondary px-2 py-1">
          <p class="text-light fw-light m-0">
            Informasi Pemberangkatan <b></b>
            </p>
        </div>
        <div class="p-3 bg-light">
            <div class="row">
              
                  <div class="row">
                      <div class="col-2">
                          <label for="exampleFormControlInput1" class="form-label">Penumpang</label>
                      </div>
                      <div class="col-10">
                          <label for="exampleFormControlInput1" class="form-label">: {{ $pesanan->namaPemesan }}</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-2">
                          <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                      </div>
                      <div class="col-10">
                          <label for="exampleFormControlInput1" class="form-label">: {{ $pesanan->noTelepon }}</label>
                      </div>
                  </div>
          </div> 
          <div class="mb-3">
            <label for="" class="fw-bold">Tanggal Keberangkatan</label>
            <div class="mt-2">
              <label for="" class="form-label">{{ $pesanan->tanggal }}</label>  
              <div class="float-end">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Reschedule</button>
              </div>
            </div>
          </div>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form action="{{ route('reschedule', $pesanan->id) }}" method="POST"  >
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pilih Tanggal Reschedule Keberangkatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" class="form-control" id=""  name="status" value="mengajukan reschedule">

          <input type="date" class="form-control" id=""  name="tanggal" value="{{ $pesanan->tanggal }}">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ajukan</button>
        </div>
      </div>
    </form>

  </div>
</div>
@endsection