@extends('dashboardtravel.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Pesanan</h1>
</div>
<br>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($pesanan->count())

<div class="container">
<table class="table table-hover ">
    <thead class="bg-light " style="vertical-align: middle; text-align:center;">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Wisata</th>
        <th>Bundle</th>
        <th>Travel Agent</th>
        <th>Tanggal </th>
        <th>Total Harga</th>
        <th>Bukti Transfer</th>
        <th>Status</th>
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
        <td>{{ $p->travel_agent->name }}</td>
        <td>{{ $p->tanggal }}</td>
        <td>Rp{{ $p->totalHarga }}</td>
        <td>
            @if( $p->buktiTf == "Belum Ada Foto")
            <small class="text-danger" >{{ $p->buktiTf }}</small>
            @else
            <a data-bs-toggle="modal" data-bs-target="#exampleModal"><img class="w-50" src="img/images/{{ $p->buktiTf }}"></a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="w-100" src="img/images/{{ $p->buktiTf }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
            @endif
        </td>
        <td>
            @if( $p->status == "Belum Kirim Bukti")
            <small class="text-danger" >{{ $p->status }}</small>
            @else
            <small class="text-primary">{{ $p->status }}</small>
            @endif
        </td>        
    </tr>
    @endforeach
</tbody>
</table>
</div>
<div class="row text-center">
    {{-- {!! $pesanan->links() !!} --}}
</div>
</div>
@else
<p class="text-center fs-5 fw-bold p-0 m-0">Belum Ada Pesanan Apapun</p>
<p class="text-center p-0 m-0">Silahkan cari wisata yang ingin anda pesan!</p>
@endif


@endsection