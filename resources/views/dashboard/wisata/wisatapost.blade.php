@extends('dashboard.layouts.main')

@section('container')

<div class="pt-5">
<h2>Wisata Post</h2>
<div class="mt-3 mb-3">
<a href="{{ route('wisatas.create') }}" class="btn btn-primary">Tambah Post Wisata</a>
</div>
<form action="/wisatapost" method="GET">
        <div class="d-flex mb-3">
            <div class=" w-50 input-group">
                <input type="search" name="search" class="form-control" placeholder="Cari Wisata atau lokasi" value="{{ request('search') }}">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
</form>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@if ($wisatas->count())
{{-- table --}}
@php
$i=0;    
@endphp
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Map</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($wisatas as $p)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $p->namaWisata }}</td>
            <td>{{ $p->lokasiWisata }}</td>
            <td>{{ $p->hargaWisata }}</td>
            <td ><img class="gambarwisatasmall" src="{{ asset('storage/' . $p->image)  }}"></td>
            <td>
            @if ($p->map != null)
                <p class="text-success">Active</p>
            @else
                <p class="">Nothing</p>
            @endif    
            </td>
            <td>{{ Str::words($p->deskripsiWisata,4) }}</td>
            <td>
                <form action="" method="POST">
   
                    <a class="btn btn-info" href="/detailwisata/{{$p->id}}">Show</a>
    
                    <a class="btn btn-warning" href="{{ route('wisatas.edit',$p->id) }}">Edit</a>
      
                    <a href="{{ route('deletewisata', ['id' => $p->id]) }}" type="submit" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="mt-3 d-flex justify-content-center">
        {!! $wisatas->links('pagination::bootstrap-4') !!}
    </div>

{{-- table close --}}
@else
<p class="text-center fs-5 fw-bold p-0 m-0">No Wisata Post Found.</p>
<p class="text-center p-0 m-0">Please add some vacation in Tambah Post Wisata</p>
@endif   
</div> 
@endsection