@extends('dashboard.layouts.main')

@section('container')
<div class="pt-5">
<h2>Wisata Detail</h2>
<div class="mt-3 mb-3">
    <div class=" ">
       <!-- <a href="{{ route('wisatas.edit',$detailwisata->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('deletewisata', ['id' => $detailwisata->id]) }}" class="btn btn-danger">Delete</a>-->
    </div>
</div>
   <!-- show Detail Wisata -->
        <div class="text-center m-5">
        <img class= "w-50" src="{{ asset('storage/' . $detailwisata->image)  }}" alt=" ">
        </div>
        <hr>
         <form class="me-auto">
         <?php 
         ?>
            <div class="mb-3">
                <label  class="form-label fw-bold">Nama Wisata :</label>
                <p>{{ $detailwisata->namaWisata }}</p>
            </div>
            <div class="mb-3">
                <label  class="form-label fw-bold">Harga :</label>
                <p>{{ $detailwisata->hargaWisata }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Peta :</label>
                <div class="gmap_canvas"><iframe width="500" height="300" id="gmap_canvas" src="{{ $detailwisata->map }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
            </div>
            <div class="mb-3">
                <label  class="form-label fw-bold">Deskripsi :</label>
                <p>{{ $detailwisata->deskripsiWisata }}</p>
            </div>
            <div class="mb-3">
                <label  class="form-label fw-bold">Lokasi :</label>
                <p>{{ $detailwisata->lokasiWisata }}</p>
            </div>
        </form>
    </div>
  </div>
  </section>
</div> 
@endsection