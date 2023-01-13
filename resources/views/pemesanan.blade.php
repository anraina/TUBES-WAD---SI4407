@extends('layoutsmain.main')

@section('container')

<div class="py-5 my-2 px-5 mx-5">
    <h3 class="mb-3">Pemesanan Wisata</h3>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h5>Informasi Wisata</h5>
    <input hidden type="text" class="form-control" id="status" name="status" value="Belum Kirim Bukti">
    <input hidden type="text" class="form-control" id="buktiTf" name="buktiTf" value="Belum Ada Foto">
    <div class="mb-3 border  rounded p-3">
        <div class="row">
            <div class="col-2">
                        <img class="w-100" src="{{ asset('storage/' . $wisata->image)  }}">
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-1">
                        <label for="exampleFormControlInput1" class="form-label">Wisata</label>
                    </div>
                    <div class="col-11">
                        <label for="exampleFormControlInput1" class="form-label">: {{ $wisata->namaWisata }}</label>
                        <input hidden type="text" class="form-control" id="wisata_id" name="wisata_id" value="{{ $wisata->id }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                    </div>
                    <div class="col-11">
                        <label for="exampleFormControlInput1" class="form-label">: {{ $wisata->lokasiWisata }}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                    </div>
                    <div class="col-11">
                        <label for="exampleFormControlInput1" class="form-label">: {{ $wisata->hargaWisata }}</label>
                        <input hidden type="text" class="form-control" id="wisata_id" name="totalHarga" value="{{ $wisata->hargaWisata }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5>Informasi dirimu</h5>
    <div class="mb-3 border rounded p-3">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="namaPemesan" placeholder="Nama Lengkap" name="namaPemesan">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kontak yang bisa dihubungi</label>
            <input type="text" class="form-control" id="noTelepon" placeholder="+62XXXXXXXXX" name="noTelepon">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat Email Pemesan</label>
            <input type="email" class="form-control" id="emailPemesan" placeholder="email@example.com"  name="emailPemesan">
        </div>

    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pilih Travel Agent</label>
        <select name="travel_agent_id" class="form-select" aria-label="Default select example">
            @foreach ($travel as $t)
            <option value="{{ $t->id }}">{{ $t->name }}</option>
            @endforeach
        </select>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Pemberangkatan</label>
        <input type="date" class="form-control" id="tanggal" placeholder="Tanggal Expired Bundle" name="tanggal">
    </div>
    <button   type="submit" class="btn btn-primary">Lanjutkan Pemesanan</button>
   
</form>
</div>

@endsection