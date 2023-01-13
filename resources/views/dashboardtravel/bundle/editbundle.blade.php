@extends('dashboardtravel.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div>
            <h2>Edit Bundle Wisata</h2>
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
   
<form action="{{ route('bundles.update',$bundle->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Bundle</label>
        <input type="text" class="form-control" id="judulBundle" placeholder="Nama Bundle" name="judulBundle" value="{{ $bundle->judulBundle }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
        <input type="hidden" name="oldImage" value="{{ $bundle->image }}">
        <div class="mb-3">
        <img src="{{ asset('storage/' . $bundle->image)  }}" alt="" class="img-preview img-fluid w-25">
        </div>
        <input type="file" class="form-control" id="image"  name="image" onchange="previewImage()">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga Bundle</label>
        <input type="text" class="form-control" id="hargaBundle" placeholder="Harga Bundle" name="hargaBundle" value="{{ $bundle->hargaBundle }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Bundle</label>
        <textarea class="form-control" id="deskripsiBundle" rows="3" name="deskripsiBundle">{{ $bundle->deskripsiBundle }}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Expired Bundle</label>
        <input type="date" class="form-control" id="tanggalExpBundle" placeholder="Tanggal Expired Bundle" name="tanggalExpBundle" value="{{ $bundle->tanggalExpBundle }}">
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