@extends('layoutsmain.main')

@section('container')
{{-- wisata --}}
<div class="container py-5 my-2">
    <h3 class="text-center p-1">Wisata</h3>
    <p class="text-secondary px-5 text-center">Pergi ke wisata paling populer di Indonesia dimanapun yang kamu mau!</p>
    <form action="/wisatawisata" method="GET">
        <div class="d-flex justify-content-center mb-3">
            <div class=" w-50 input-group">
                <input type="search" name="search" class="form-control" placeholder="Cari Wisata atau lokasi yang kamu mau!" value="{{ request('search') }}">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </form> 
    @if ($wisatas->count())
    {{-- card --}}
                <div class="flex-wrap justify-content-center d-flex py-3">
                    @foreach ($wisatas as $p)
                        
                    <div dusk="wisata-card" class="mx-2 my-2">
                        <a href="/wisatadetail/{{ $p->id }}" class="text-decoration-none link-dark">
                            <div class="card border-0" style="width: 14rem;">
                                <img src="{{ asset('storage/' . $p->image)  }}" class="card-img-top  imgcard" alt="">
                                <div class="pt-2">
                                    <h6 class=" mb-0">{{ $p->namaWisata}}</h6>
                                    <small class="card-text p-0 m-0">{{ $p->lokasiWisata }}</small>
                                    <p class="card-text p-0 m-0 text-secondary">Rp{{ $p->hargaWisata }}</p>
                                    
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
    <p class="text-center p-0 m-0">Please wait for the maintenance</p>
    @endif   

</div>
{{-- wisata close --}}
@endsection