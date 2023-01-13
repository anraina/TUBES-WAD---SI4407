<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\wisata;
use App\Models\travel_agent;
use App\Models\bundle;

class AuthController extends Controller

{
    public function landing() {
        return view('landing', [
            "wisatas" => wisata::paginate(4)->withQueryString(),
            "travelagentpost" => travel_agent::paginate(4)->withQueryString(),
            "bundles" => bundle::paginate(4)->withQueryString()

        ]);
    }

    public function register(){
        return view('register');
    }

    public function index() {
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'user') {
                return redirect()->intended('user');
            } elseif ($user->level == 'travel') {
                return redirect()->intended('travel');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect('/dashboard');
                } elseif ($user->level == 'travel') {
                    return redirect('/bundles');
                } elseif ($user->level == 'user') {
                    //
                }
                return redirect()->intended('/');
            }

        return redirect('login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('/');
    }
}