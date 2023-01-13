@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div>
            <h2>Tambah Travel Agen</h2>
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
   
<form action="{{ route('travels.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Travel Agen</label>
        <input type="text" class="form-control" id="name" placeholder="Nama Travel Agen" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
            <img  alt="" class="img-preview img-fluid w-25">
        <input type="file" class="form-control mt-3" id="image"  name="image" onchange="previewImage()">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username Travel Agen</label>
        <input type="text" class="form-control" id="username" placeholder="Username Travel Agen" name="username">
    </div>
    <div class="mb-3">
        <input type="hidden" class="form-control" id="level" name="level" value="travel">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password">
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