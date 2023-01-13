<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bundle;
use App\Models\wisata;
use Illuminate\Support\Facades\Storage;

class BundleController extends Controller
{
    public function index()
    {
        return view('dashboardtravel.bundle.daftarbundle', [
            "title" => "Daftar Bundle",
            "bundles" => bundle::latest()->filter(request(['search']))->paginate(8)->withQueryString()

        ]);
    }

    public function create()
    {
        return view('dashboardtravel.bundle.addbundle');
    }
  
    public function store(Request $request)
    {

        if ($files = $request->file('image')) {
            $file = $request->file('image');
            $lokasi = public_path('img/images');
            $gambar =  rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $gambar);
            $files->move($lokasi, $gambar);
            // $pesans = pesanan::all();
            $travel = new bundle();
            $travel->judulBundle = $request->judulBundle;
            $travel->hargaBundle = $request->hargaBundle;
            $travel->deskripsiBundle = $request->deskripsiBundle;
            $travel->tanggalExpBundle = $request->tanggalExpBundle;
            $travel->image = $pathImg;
            $travel->save();
    
        }
        // $request->validate([
        //     'judulBundle' => 'required',
        //     'hargaBundle' => 'required',
        //     'deskripsiBundle' => 'required',
        //     'tanggalExpBundle' => 'required',
        // ]);
      
        // bundle::create($request->all());
       
        return redirect('/bundles')->with('success','Bundle created successfully.');
    }

    public function edit(bundle $bundle)
    {
        return view('dashboardtravel.bundle.editbundle',compact('bundle'));
    }

    public function update(Request $request, $id)
    {
        if ($files = $request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $file = $request->file('image');
            $lokasi = public_path('img/images');
            $gambar =  rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $gambar);
            $files->move($lokasi, $gambar);
            $bundles = bundle::all();
            $bundle = $bundles->find($id);
            $bundle->judulBundle = $request->judulBundle;
            $bundle->hargaBundle = $request->hargaBundle;
            $bundle->image = $pathImg;
            $bundle->deskripsiBundle = $request->deskripsiBundle;
            $bundle->tanggalExpBundle = $request->tanggalExpBundle;
            $bundle->save();
        return redirect('/bundles')->with('success','Bundle edited successfully.');

        }
        // $request->validate([
        //     'judulBundle' => 'required',
        //     'hargaBundle' => 'required',
        //     'deskripsiBundle' => 'required',
        //     'tanggalExpBundle' => 'required',
        // ]);
      
        // $bundle->update($request->all());
      
    }

    public function show($id){

        return view('dashboardtravel.bundle.detailbundle', [
            "title" => "Detail Bundle",
            "detailbundle" => bundle::find($id)
    
        ]);
    }

    public function bundleuser($id){

        return view('userarea.bundle.detailbundle', [
            "title" => "Detail Bundle",
            "detailbundle" => bundle::find($id),
            "wisatas" => wisata::paginate(4)->withQueryString()
    
        ]);
    }
    public function bundlebundle(){

        return view('userarea.bundle.bundlebundle', [
            "title" => "Bundle Bundle",
            "bundles" => bundle::paginate(8)->withQueryString()

        ]);
    }

    public function deletebundle($id) {
        $bundle = bundle::find($id);
        $bundle->delete();
        return redirect('/bundles')->with('Success','Paket bundle wisata berhasil dihapus');
    }

}
