{{-- Travel agent --}}
<div class="container py-5 my-2">
    <h3 class="text-center p-1">Our Travel Agents</h3>
    <p class="text-secondary px-5 text-center">Kami bekerja sama dengan berbagai jaringan travel agent di seluruh dunia untuk memastikan kenyamanan Anda saat berpergian di belahan dunia manapun!</p>

    @if ($travelagentpost->count())
    {{-- card --}}
                <div class="flex-wrap justify-content-center d-flex py-3">
                    @foreach ($travelagentpost as $p)
                        
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
                <div class="mt-3 d-flex justify-content-center">
                    <a href="/traveltravel" class="btn btn-primary" style=" border-radius: 0.5rem">Lihat Semua</a>
                </div> 
    {{-- card close --}}
    @else
    <p class="text-center fs-5 fw-bold p-0 m-0">No Travel Agent Post Found.</p>
    <p class="text-center p-0 m-0">Please wait for the maintenance</p>
    @endif   
</div>
{{-- Travel Agent close --}}