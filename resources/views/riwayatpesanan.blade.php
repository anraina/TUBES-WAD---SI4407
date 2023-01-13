@extends('layoutsmain.main')

@section('container')
<div class="p-5 my-5 mx-3">
<div class="bg-success rounded-2 text-center py-2">
    <h2 class="fw-bold text-light">Pesanan</h2>
</div>
<br>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@elseif ($message = Session::get('warning'))
    <div class="alert alert-warning">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($pesanan->count())

<table class="table table-hover ">
    <thead class="bg-light " style="vertical-align: middle; text-align:center;">
    <tr>
        <th>No</th>
        <th>Nama Pemesan</th>
        <th>No Telepon</th>
        <th>Wisata</th>
        <th>Bundle</th>
        <th>Travel Agent</th>
        <th>Tanggal Keberangkatan</th>
        <th>Total Harga</th>
        <th>Bukti Transfer</th>
        <th>Status</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    @php
        $i = 0;
    @endphp
    <tbody style="vertical-align: middle; text-align:center;">
    @foreach ($pesanan as $p)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $p->namaPemesan }}</td>
        <td>{{ $p->noTelepon }}</td>
        <td>
            @if( $p->wisata == null)
            <small class="text-secondary">-</small>
            @else
            <small>{{ $p->wisata->namaWisata }}</small>
            @endif
        </td>
        <td>
            @if( $p->bundle == null)
            <small class="text-secondary">-</small>
            @else
            <small>{{ $p->bundle->judulBundle }}</small>
            @endif
        </td>
        <td>
            @if( $p->travel_agent == null)
            <small class="text-secondary">-</small>
            @else
            <small>{{ $p->travel_agent->name }}</small>
            @endif
        </td>
        <td>{{ $p->tanggal }}</td>
        <td>Rp{{ $p->totalHarga }}</td>
        <td>
            @if( $p->buktiTf == "Belum Ada Foto")
            <small class="text-danger" >{{ $p->buktiTf }}</small>
            @else
            <img class="w-50" src="img/images/{{ $p->buktiTf }}">
            @endif
        </td>
        <td>
            @if( $p->status == "Belum Kirim Bukti")
            <small class="text-danger" >{{ $p->status }}</small>
            @else
            <small class="text-primary">{{ $p->status }}</small>
            @endif
        </td>
        <td>
                @if( $p->status == "Belum Kirim Bukti")
                <a dusk="bayar1" class="btn btn-warning" href="/konfirmasi/{{$p->id}}">Pembayaran</a>
                @else
                <a dusk="lihatpesanan1" class="btn btn-info" href="/tiketpesanan/{{$p->id}}">Lihat Pesanan</a>
                @endif
        </td>
        <td>
            @if( $p->status == "Belum Kirim Bukti")
                <form action="{{ route('bataluser', $p->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <button class="btn btn-danger" type="submit" name="submit">Batalkan</button>
                <input hidden type="text" class="form-control" id="status" name="status" value="Batal"></form>
            @endif
        </td>
    </tr>
    @endforeach
</tbody>
</table>
<div class="row text-center">
    {{-- {!! $pesanan->links() !!} --}}
</div>
</div>
@else
<p class="text-center fs-5 fw-bold p-0 m-0">Belum Ada Pesanan Apapun</p>
<p class="text-center p-0 m-0">Silahkan cari wisata yang ingin anda pesan!</p>
@endif  
@endsection