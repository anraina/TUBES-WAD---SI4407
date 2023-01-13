@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div>
            <h2>Tambah Wisata</h2>
        </div>
    </div>
</div>
   
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
   
<form action="{{ route('wisatas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Wisata</label>
        <input type="text" class="form-control" id="namaWisata" placeholder="Nama Wisata" name="namaWisata">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga</label>
        <input type="text" class="form-control" id="hargaWisata" placeholder="Harga Wisata" name="hargaWisata">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
            <img  alt="" class="img-preview img-fluid w-25">
        <input type="file" class="form-control mt-3" id="image"  name="image" onchange="previewImage()">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Map</label>
        <textarea type="text" class="form-control" id="map"  name="map"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsiWisata" rows="3" name="deskripsiWisata"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Lokasi Wisata</label>
        <input type="text" class="form-control" id="lokasiWisata" placeholder="Lokasi Wisata" name="lokasiWisata">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   
</form>

<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
    
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
    
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
    </script>
@endsection