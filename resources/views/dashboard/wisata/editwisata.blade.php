@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div>
            <h2>Edit Wisata Post</h2>
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
   
<form action="{{ route('wisatas.update',$wisata->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama wisata</label>
        <input type="text" class="form-control" id="namaWisata" placeholder="Nama wisata" name="namaWisata" value="{{ $wisata->namaWisata }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga wisata</label>
        <input type="text" class="form-control" id="hargaWisata" placeholder="Harga wisata" name="hargaWisata" value="{{ $wisata->hargaWisata }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
        <input type="hidden" name="oldImage" value="{{ $wisata->image }}">
        <div class="mb-3">
        <img src="{{ asset('storage/' . $wisata->image)  }}" alt="" class="img-preview img-fluid w-25">
        </div>
        <input type="file" class="form-control" id="image"  name="image" onchange="previewImage()">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Map</label>
        <div class="gmap_canvas"><iframe width="500" height="300" id="gmap_canvas" src="{{ $wisata->map }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
        <textarea type="text" class="form-control" id="map"  name="map">{{ $wisata->map }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi wisata</label>
        <textarea class="form-control" id="deskripsiWisata" rows="3" name="deskripsiWisata">{{ $wisata->deskripsiWisata }}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Lokasi Wisata</label>
        <input type="text" class="form-control" id="lokasiWisata" placeholder="Lokasi Wisata" name="lokasiWisata" value="{{ $wisata->lokasiWisata }}">
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