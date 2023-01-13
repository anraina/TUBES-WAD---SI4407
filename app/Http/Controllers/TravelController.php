<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\travel_agent;
use App\Models\wisata;
use App\Models\bundle;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class TravelController extends Controller
{
    public function travelpost(){
        return view('dashboard.travel.travelpost', [
            "title" => "Travel Agent",
            "travelagentpost" => travel_agent::latest()->filter(request(['search']))->paginate(8)->withQueryString()

        ]);
    }
    public function traveldetail($id){

        return view('dashboard.travel.detailtravel', [
            "title" => "Detail Travel",
            "detailtravel" => travel_agent::find($id)
    
        ]);
    }

    public function deletetravelpost($id, $email) {
        $travel = travel_agent::find($id);
        $travel->delete();
        $user = User::where("email", $email)->first()->id;
        $iduser = User::find($user);
        $iduser->delete();
        return redirect('/travelpost')->with('success','Travel Agent berhasil dihapus');
    }

    public function create()
    {
        return view('dashboard.travel.create');
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
            $travel = new travel_agent();
            $travel->name = $request->name;
            $travel->email = $request->email;
            $travel->password = $request->password;
            $travel->username = $request->username;
            $travel->level = $request->level;
            $travel->image = $pathImg;
            $travel->save();
    
        }
        // $request->validate([
        //     'name' => 'required',
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        // travel_agent::create($request->all());
        User::create($request->all());
       
        return redirect('/travelpost')->with('success','Travel created successfully.');
    }
    
    public function traveltravel(){

        return view('userarea.travel.traveltravel', [
            "title" => "Travel Travel",
            "travelagentpost" => travel_agent::latest()->filter(request(['search']))->paginate(8)->withQueryString()

        ]);
    }
    public function traveluserdetail($id){

        return view('userarea.travel.detailtravel', [
            "title" => "Detail Travel",
            "detailtravel" => travel_agent::find($id),
            "traveltravel" => travel_agent::paginate(4)->withQueryString(),
            "wisatas" => wisata::paginate(4)->withQueryString()
    
        ]);
    }
    
}
