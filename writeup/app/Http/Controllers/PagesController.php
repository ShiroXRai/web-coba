<?php

namespace App\Http\Controllers;

use Auth;
use App\kontak;
use App\Artikel;
use App\Student;
use App\Login;
use App\User;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    { 
        $users = User::all();
        
        $artikels = Artikel::all();
        if(Auth()->user()){
            return view('index', compact('artikels','users'));

    }
        return view('login', compact('artikels'));
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function kontak()
    {
        if(Auth()->user()){
            return view('kontak');   
    }
            return view('kontak_login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $kontak = new kontak;
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;
        $kontak->isi = $request->isi;
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'isi' => 'required',
            
        ]);
            $kontak->save();
        return redirect('/kontak')->with('status','Tanggapan berhasil dikirimkan');
    }
}
