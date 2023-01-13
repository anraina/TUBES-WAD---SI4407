<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;
use App\Models\bundle;
use App\Models\pesanan;
use App\Models\travel_agent;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $request->validate([
            'wisata_id' => 'required',
            'totalHarga' => 'required',
            'namaPemesan' => 'required',
            'noTelepon' => 'required',
            'emailPemesan' => 'required',
            'buktiTf' => 'required',
            'status' => 'required',
            'tanggal' => 'required',
            'travel_agent_id' => 'required',

        ]);
      
        pesanan::create($request->all());
       
        return redirect('/riwayatpesanan')->with('success','Pemesanan berhasil dipesan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pemesanan', [
            "title" => "Pemesanan",
            "wisata" => wisata::find($id),
            "travel" => travel_agent::all(),
            "pesanan" => pesanan::find($id),
    
        ]);
    }

    public function showBundle($id)
    {
        return view('pemesananBundle', [
            "title" => "Pemesanan Bundle",
            "bundle" => bundle::find($id),
            "travel" => travel_agent::all(),
            "pesanan" => pesanan::find($id),
    
        ]);
    }
    public function storeBundle(Request $request )
    {
        $request->validate([
            'bundle_id' => 'required',
            'totalHarga' => 'required',
            'namaPemesan' => 'required',
            'noTelepon' => 'required',
            'emailPemesan' => 'required',
            'buktiTf' => 'required',
            'status' => 'required',
            'tanggal' => 'required',
            'travel_agent_id' => 'required',

        ]);
      
        pesanan::create($request->all());
       
        return redirect('/riwayatpesanan')->with('success','Pemesanan berhasil dipesan.');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('buktiTf')) {
            $files = $request->file('buktiTf');
            $lokasi = public_path('img/images');
            $gambarbuktiTf =  rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $files->move($lokasi, $gambarbuktiTf);
            $pesans = pesanan::all();
            $pesan = $pesans->find($id);
            $pesan->buktiTf = $gambarbuktiTf;
            $pesan->status = $request->status;
            $pesan->save();
        return redirect('/riwayatpesanan')->with('success','Bukti berhasil dikirim.');

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function deletepesanan($id)
    {
        $pesanan = pesanan::find($id);
        $pesanan->delete();
        return redirect('/riwayatpesanan')->with('success','Pesanan berhasil dibatalkan');
    }

    public function riwayatpesanan()
    {
        return view('riwayatpesanan', [
            "title" => "Riwayat Pesanan",
            "pesanan" => pesanan::all(),
    
        ]);

    }
    public function tiketpesanan($id)
    {
        return view('tiketpesanan', [
            "title" => "Tiket Pesanan",
            // "pesanan" => $pesanan
            "pesanan" => pesanan::find($id),
            "wisata" => wisata::find($id),
            "bundle" => bundle::find($id),
    
        ]);

    }

    public function konfirmasi($id)
    {
        return view('konfirmasi', [
            "title" => "Konfirmasi",
            
            "pesanan" => pesanan::find($id),
    
        ]);

    }
    public function storebukti(Request $request, $id){
        if ($request->file('buktiTf')) {
            $files = $request->file('buktiTf');
            $lokasi = public_path('/img/images/');
            $gambarbuktiTf =  rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            // $pathImg = $files->storeAs('images', $gambarbuktiTf);
            $files->move($lokasi, $gambarbuktiTf);
            $pesans = pesanan::all();
            $pesan = $pesans->find($id);
            $pesan->buktiTf = $gambarbuktiTf;
            $pesan->status = $request->status;
            $pesan->save();
        return redirect('/riwayatpesanan')->with('success','Bukti berhasil dikirim.');

        }

    }

    public function reschedule($id, Request $request )
    {
     
            $pesans = pesanan::all();
            $pesan = $pesans->find($id);
            // $pesan = $pesanan;
            $pesan->status = $request->status;
            $pesan->tanggal = $request->tanggal;
            // $pesan->travel_agent_id = $request->travel_agent_id;
            $pesan->save();
            // $request->validate([
            //     'status' => 'required',
            //     'tanggal' => 'required',
            // ]);
            
            // $pesanan->update($request->all());
            return redirect('/riwayatpesanan')->with('success','Reschedule berhasil diajukan.');
        
    }
    public function bataluser($id, Request $request )
    {
     
            $pesans = pesanan::all();
            $pesan = $pesans->find($id);
            // $pesan = $pesanan;
            $pesan->status = $request->status;
            // $pesan->travel_agent_id = $request->travel_agent_id;
            $pesan->save();
            // $request->validate([
            //     'status' => 'required',
            //     'tanggal' => 'required',
            // ]);
            
            // $pesanan->update($request->all());
            return redirect('/riwayatpesanan')->with('warning','Pesanan Telah Dibatalkan.');
        
    }
}
