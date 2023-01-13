@extends('dashboard.layouts.main')

@section('container')
<div class="pt-5">
<h2>Travel Post</h2>
<div class="mt-3 mb-3">
<a href="{{ route('travels.create') }}" class="btn btn-primary">Tambah Travel Agen</a>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <form action="/travelpost" method="GET">
        <div class="d-flex mb-3">
            <div class=" w-50 input-group">
                <input type="search" name="search" class="form-control" placeholder="Cari nama atau username" value="{{ request('search') }}">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
</form>
    @if ($travelagentpost->count())
    {{-- table --}}
    @php
    $i=0;    
    @endphp
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Gambar</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($travelagentpost as $p)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->username }}</td>
                <td ><img class="gambarwisatasmall" src="{{ asset('storage/' . $p->image)  }}"></td>
                <td>
                    <form action="" method="POST">
       
                        <a class="btn btn-info" href="/detailtravel/{{$p->id}}">Show</a>
        
                        {{-- <a class="btn btn-warning" href="{{ route('travel.edit',$p->id) }}">Edit</a> --}}
          
                        {{-- <a href="{{ route('deletetravel', ['id' => $p->id]) }}" type="submit" class="btn btn-danger">Delete</a> --}}
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="mt-3 d-flex justify-content-center">
            {!! $travelagentpost->links('pagination::bootstrap-4') !!}
        </div>
    
    {{-- table close --}}


@else
<p class="text-center fs-5 fw-bold p-0 m-0">No Travel Agent Post Found.</p>
<p class="text-center p-0 m-0">Please add some Travel in Tambah Post Travel</p>
@endif   
</div> 
@endsection