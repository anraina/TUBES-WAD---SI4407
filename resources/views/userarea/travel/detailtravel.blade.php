@extends('layoutsmain.main')

@section('container')
<div class="bg-light p-5">
    <div class="p-5">
    <!-- show Detail Wisata -->
        <div class="bg-white py-4 rounded-top shadow m-0">
            <div class="mb-3">
                <h3 class="text-center fw-bold">{{ $detailtravel->name }}</h3>
            </div>

            <div class="d-flex g-2 justify-content-center m-5 align-items-center">
                <img class= "w-50" src="{{ asset('storage/' . $detailtravel->image)  }}" alt=" ">
            </div>
        </div>
        <div class="rounded bg-white"> 
            <div class="row shadow m-0">
                <div class="col  p-3 text-white" style="background-color: #ff772e">
                    <small class="">Kontak Email</small>
                    <h5>{{ $detailtravel->email }}</h5>
                </div>
                <div class="col bg-white p-3">
                </div>
            </div>
        </div>    
            </form>
            <div class="bg-white p-3 rounded shadow ">
                <div>
                    <h4 class="fw-bold mt-4 text-center">Travel Lainnya</h4>
                </div>
                <div class="flex-wrap justify-content-center d-flex py-3">
                    @foreach ($traveltravel as $p)
                        
                    <div class="mx-2 my-2">
                        <a href="/traveluserdetail/{{ $p->id }}" class="text-decoration-none link-dark">
                            <div class="card border-0" style="width: 14rem;">
                                <img src="{{ asset('storage/' . $p->image)  }}" class="card-img-top  imgcard" alt="">
                                <div class="pt-2">
                                    <h6 class=" mb-0">{{ $p->name}}</h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    @endforeach

                </div>
                <div class="mt-3  d-flex justify-content-center">
                    {{ $traveltravel->links('pagination::bootstrap-4') }}   
                </div> 
            <div class="bg-white p-3 rounded shadow ">
                <div>
                    <h4 class="fw-bold mt-4 text-center">Wisata Lainnya</h4>
                </div>
            
                <div class="flex-wrap justify-content-center d-flex py-3">
                    @foreach ($wisatas as $p)
                        
                    <div class="mx-2 my-2">
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
                <div class="mt-3  d-flex justify-content-center">
                    {{ $wisatas->links('pagination::bootstrap-4') }}   
                </div> 
    {{-- card close --}}
            </div>
    </div>  
</div>



@endsection