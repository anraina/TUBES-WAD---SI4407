<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use App\Models\pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{

    public function dashboard(){
        return view('dashboard.dash', [
            "title" => "Dashboard",
            "pesanan" => pesanan::all(),

        ]);
    }

    public function dashboardtravel(){
        return view('dashboardtravel.dash', [
            "title" => "Dashboard",
            "pesanan" => pesanan::all(),

        ]);
    }

    public function verifikasi(Request $request, $id){
            $pesans = pesanan::all();
            $pesan = $pesans->find($id);
            $pesan->status = $request->status;
            $pesan->save();
        return redirect('/dashboard')->with('success','Verifikasi berhasil.');

    }

    public function wisatapost(){
        return view('dashboard.wisata.wisatapost', [
            "title" => "Wisata Post",
            "wisatas" => wisata::latest()->filter(request(['search']))->paginate(8)->withQueryString()

        ]);
    }

    public function wisatadetail($id){

        return view('dashboard.wisata.detailwisata', [
            "title" => "Detail Wisata",
            "detailwisata" => wisata::find($id),
            
        ]);
    }

    public function create()
    {
        return view('dashboard.wisata.create');
    }
  
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-images');
        // $validatedData = $request->validate([
        //     'namaWisata' => 'required',
        //     'hargaWisata' => 'required',
        //     'image' => 'image|file|max:1024',
        //     'map' => 'required',
        //     'deskripsiWisata' => 'required',
        //     'lokasiWisata' => 'required',
            
        // ]);
        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
      
        // wisata::create($request->all());
       
        // return redirect('/wisatapost')->with('success','Objek Wisata berhasil ditambahkan');

        if ($files = $request->file('image')) {
            $file = $request->file('image');
            $lokasi = public_path('img/images');
            $gambar =  rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $gambar);
            $files->move($lokasi, $gambar);
            // $pesans = pesanan::all();
            $wisata = new wisata();
            $wisata->namaWisata = $request->namaWisata;
            $wisata->hargaWisata = $request->hargaWisata;
            $wisata->image = $pathImg;
            $wisata->map = $request->map;
            $wisata->deskripsiWisata = $request->deskripsiWisata;
            $wisata->lokasiWisata = $request->lokasiWisata;
            $wisata->save();
        return redirect('/wisatapost')->with('success','Objek Wisata berhasil ditambahkan');

        }
    }
    public function edit(wisata $wisata)
    {
        return view('dashboard.wisata.editwisata',compact('wisata'));
    }

    public function update($id, Request $request)
    {
        // $request->validate([
        //     'namaWisata' => 'required',
        //     'hargaWisata' => 'required',
        //     'deskripsiWisata' => 'required',
        //     'lokasiWisata' => 'required',
        // ]);
      
        // $wisata->update($request->all());
      
        // return redirect('/wisatapost')->with('success','Wisata edited successfully.');

        if ($files = $request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $file = $request->file('image');
            $lokasi = public_path('img/images');
            $gambar =  rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $gambar);
            $files->move($lokasi, $gambar);
            $wisatas = wisata::all();
            $wisata = $wisatas->find($id);
            $wisata->namaWisata = $request->namaWisata;
            $wisata->hargaWisata = $request->hargaWisata;
            $wisata->image = $pathImg;
            $wisata->map = $request->map;
            $wisata->deskripsiWisata = $request->deskripsiWisata;
            $wisata->lokasiWisata = $request->lokasiWisata;
            $wisata->save();
        return redirect('/wisatapost')->with('success','Objek Wisata berhasil diubah');

        }
    }

    public function deletewisata($id) {
        $wisata = wisata::find($id);
        $wisata->delete();
        return redirect('/wisatapost')->with('success','Objek wisata berhasil dihapus');
    }



    //user
    public function wisatadetailuser($id){

        return view('userarea.wisata.detailwisata', [
            "title" => "Detail Wisata",
            "detailwisata" => wisata::find($id),
            "wisatas" => wisata::paginate(4)->withQueryString()
    
        ]);
    }

    public function wisatawisata(){

        return view('userarea.wisata.wisatawisata', [
            "title" => "Wisata Wisata",
            "wisatas" => wisata::latest()->filter(request(['search']))->paginate(12)->withQueryString()

        ]);
    }
}
