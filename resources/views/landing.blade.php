@extends('layoutsmain.main')

@section('container')
<div style="background-image: url({{ asset('img/home.jpg') }}); height: 100vh ; ">
    <div class="p-5  text-center ">
        <div class="p-5">
            <div class="p-5">
                <p class="text-center fs-1 fw-bolder" style="color: #050505; ">
                    Make The Best Out of Your
                    <br>
                    Travelling Experience
                </p>
                <p class="text-center fs-3" style="color: #080808;">
                    Travel With Us Now
                </p>
                <a href="">
                    <a href="{{url('wisatawisata')}}" type="button" class="btn btn-lg btn-primary" style="margin-top: 1rem; border-radius: 0.75rem">Book Now</a>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="px-5 mx-5">

    @include('userarea.wisata.wisata')

<hr>

    @include('userarea.bundle.bundle')


<hr>

    @include('userarea.travel.travel')


</div>
@endsection

