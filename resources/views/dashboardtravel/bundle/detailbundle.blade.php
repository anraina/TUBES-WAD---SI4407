@extends('dashboardTravel.layouts.main')

@section('container')
<div class="pt-5">
<h2>Bundle Detail</h2>
<div class="mt-3 mb-3">
    {{-- <div class=" ">
        <a href="{{ route('bundles.edit',$detailbundle->id) }}" class="btn btn-warning">Edit</a>
        <a href="/" class="btn btn-danger">Delete</a>
    </div> --}}
</div>
   <!-- show buku -->
        <div class="text-center m-5">
        <img class= "w-50" src="{{ asset('storage/' . $detailbundle->image)  }}" alt=" ">
        </div>
        <hr>
         <form class="me-auto">
         <?php 
         ?>
            <div class="mb-3">
                <label  class="form-label fw-bold">Nama Bundle :</label>
                <p>{{ $detailbundle->judulBundle }}</p>
            </div>
            <div class="mb-3">
                <label  class="form-label fw-bold">Harga Bundle :</label>
                <p>{{ $detailbundle->hargaBundle }}</p>
            </div>
            <div class="mb-3">
                <label  class="form-label fw-bold">Deskripsi :</label>
                <p>{{ $detailbundle->deskripsiBundle }}</p>
            </div>
            <div class="mb-3">
                <label  class="form-label fw-bold">Tanggal Expire :</label>
                <p>{{ $detailbundle->tanggalExpBundle }}</p>
            </div>
        </form>
    </div>
  </div>
  </section>
</div> 
@endsection