@extends('dashboardtravel.layouts.main')

@section('container')
<div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Daftar Bundle</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('bundles.create') }}"> Tambah Tiket Bundle Baru</a>
            </div>
        </div>
    </div>

    <form action="/bundles" method="GET">
        <div class="d-flex mb-3">
            <div class=" w-50 input-group">
                <input type="search" name="search" class="form-control" placeholder="Cari Paket Bundle" value="{{ request('search') }}">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
</form>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 @if ($bundles->count())
{{-- table --}}
@php
$i=0;    
@endphp
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul Tiket Bundle</th>
            <th>Gambar</th>
            <th>Harga Tiket Bundle</th>
            <th>Tanggal Expired Tiket Bundle</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bundles as $bundle)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $bundle->judulBundle }}</td>
            <td ><img class="gambarwisatasmall" src="{{ asset('storage/' . $bundle->image)  }}"></td>
            <td>{{ $bundle->hargaBundle }}</td>
            <td>{{ $bundle->tanggalExpBundle }}</td>
            <td>
                <form action="" method="POST">
   
                    <a class="btn btn-info" href="/bundles/{{$bundle->id}}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('bundles.edit',$bundle->id) }}">Edit</a>
      
                    <a href="{{ route('deletebundle', ['id' => $bundle->id]) }}" type="submit" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endif
    
    <div class="row text-center">
        {!! $bundles->links() !!}
    </div>
@endsection