<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function login(){
        return view(view: 'admin.dshbrd-admin');
    }
    // public function register(){
    //     return view('register');
    // }
    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => ['required'],
            'password' => ['required'],
            // 'status' => ['required'],
        ]);
        if (Auth::attempt($validasi)) {
            return redirect('dshbrd')->with('pesan', 'login anda berhasil');
        }
        return redirect()->back()->with('pesan', 'login anda gagal');
    }

    public function startlogin(){
        return view('login');
    }
    public function home(){
        return view('home');
    }
    public function beranda(){
        return view('beranda');
    }
    public function account(){
        return view('account');
    }
    public function logberanda(){
        return view('beranda');
    }

    public function education(){
        return view('education');
    }
    public function about(){
        return view('about');
    }
    public function object(){
        return view('object');
    }
    public function shop(){
        return view('shop-majalah');
    }
    public function shopbook(){
        return view('shop-book');
    }
    public function back(){
        return view('shop-majalah');
    }

    // -----  CONTROLLER KONTEN  -----
    public function huruf(){
        return view('alfabet');
    }
    public function lawangsewu(){
        return view('lawangsewu');
    }
    public function prambanan(){
        return view('prambanan');
    }
    public function smphpmda(){
        return view('sumpahpemuda');
    }
    public function manene(){
        return view('ritual-manene');
    }

    // -----  UNTUK DASHBORD ADMIN  -----
    public function dshbrd(){
        return view('admin.dshbrd-admin');
    }
    public function page(){
        return view('admin.dshbrd-admin');
    }
    public function dshbrdsetting(){
        return view('admin.setting');
    }

    public function aboutadmin(){
        return view('admin.about-admin');
    }
    public function berandaadmin(){
        return view('admin.beranda-admin');
    }


    // function logout(){
    //     Auth::logout();
    //     return redirect('/login');
    // }
}
