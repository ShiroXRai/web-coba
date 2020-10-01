<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class ArtikelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $artikels = Artikel::all();
        return view('artikels.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->gambar = $request->gambar;
        $artikel->isi = $request->isi;
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            
        ]);
      
          if ($request->hasfile('gambar')){
                    $file = $request->file('gambar');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('images/',$filename);
                    $artikel->gambar = $filename;
            } else{
                return $request;
                $artikel->gambar ='';
            }

            $artikel->save();
        return redirect('/artikels')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        return view('artikels.show', compact('artikel'));
    }

    public function muncul(Artikel $artikel)
    {
        return view('belumlogin.muncul', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('artikels.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'isi' => 'required'
        ]);
        
        Artikel::where('id', $artikel->id)
                ->update([
                    'judul' => $request->judul,
                    'gambar' => $request->gambar,
                    'isi' => $request->isi,
                ]);
                if($request->hasfile('gambar')){
                    $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
                    $artikel->gambar = $request->file('gambar')->getClientOriginalName();
                    $artikel->save();
                }
     return redirect('/artikels')->with('status','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        Artikel::destroy($artikel->id);
        return redirect('/artikels')->with('status','Data Berhasil Dihapus!');
    }
}
