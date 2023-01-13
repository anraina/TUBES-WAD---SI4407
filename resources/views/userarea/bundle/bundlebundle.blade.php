@extends('layoutsmain.main')

@section('container')
{{-- bundle disini--}}
<div class="container py-5 my-2">
    <h3 class="text-center p-1">Bundle</h3>
    <p class="text-secondary px-5 text-center">Nikmati wisata ke berbagai daerah dengan paket wisata bundle kamu bisa kemana aja!</p>
    @if ($bundles->count())
    {{-- card --}}
                <div class="flex-wrap justify-content-center d-flex py-3">
                    @foreach ($bundles as $p)
                        
                    <div class="mx-2 my-2">
                        <a href="/bundleuser/{{ $p->id }}" class="text-decoration-none link-dark">
                            <div class="card border-0" style="width: 14rem;">
                                <img src="{{ asset('storage/' . $p->image)  }}" class="card-img-top  imgcard" alt="">
                                <div class="pt-2">
                                    <h6 class=" mb-0">{{ $p->judulBundle}}</h6>
                                    <small class="card-text p-0 m-0">Rp{{ $p->hargaBundle }}</small>
                                </div>
                            </div>
                        </a>
                    </div>

                    @endforeach

                </div>
                <div class="mt-3 d-flex justify-content-center">
                    {{ $bundles->links('pagination::bootstrap-4') }}   

                </div> 
    {{-- card close --}}
    @else
    <p class="text-center fs-5 fw-bold p-0 m-0">No Bundles Post Found.</p>
    <p class="text-center p-0 m-0">Please wait for the maintenance</p>
    @endif   
</div>
{{-- bundle close --}}

@endsection