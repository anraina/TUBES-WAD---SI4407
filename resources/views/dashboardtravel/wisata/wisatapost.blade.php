@extends('dashboard.layouts.main')

@section('container')
<div class="pt-5">
<h2>Wisata Post</h2>
<div class="mt-3 mb-3">
<a href="/" class="btn btn-primary">Tambah Post Wisata</a>
</div>
@if ($wisatas->count())
{{-- card --}}
            <div class="flex-wrap justify-content-center d-flex py-3">
                @foreach ($wisatas as $p)
                    
                <div class="mx-2 my-2">
                    <a href="/detailwisata/" class="text-decoration-none link-dark">
                        <div class="card " style="width: 14rem;">
                            <img src="img/papuma.jpg" class="card-img-top  imgcard" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->namaWisata}}</h5>
                                <p class="card-text p-0 m-0">{{ $p->lokasiWisata }}</p>
                                <p class="card-text p-0 m-0">Rp{{ $p->hargaWisata }}</p>
                                <p class="card-text ">{{ Str::words($p->deskripsiWisata, 6) }}</p>
                                <div class="mt-2">
                                    <a href="">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                    <a href="">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach

            </div>
            <div class="mt-3 d-flex justify-content-center">
                {{ $wisatas->links('pagination::bootstrap-4') }}   
            </div> 
{{-- card close --}}
@else
<p class="text-center fs-5 fw-bold p-0 m-0">No Wisata Post Found.</p>
<p class="text-center p-0 m-0">Please add some vacation in Tambah Post Wisata</p>
@endif   
</div> 
@endsection