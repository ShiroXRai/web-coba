<?php

namespace App\Http\Controllers;

use App\User;
use App\Login;
use App\Student;
use DB;
use Illuminate\Http\Request;

class ProfilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $students = Student::all();
        $users = User::all();
        // ['user' => $user]
    }
    
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        
        
        return view('profils.index', compact('user'));             
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('profils.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $user= \App\User::find($user->id);
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'required|email:rfc,dns',
            'jurusan' => 'required',
            'password' => 'required'
            ]);
            
            $user->student()->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
                
                ]);
                
                
                
                User::where('id', $user->id)
                ->update([
                    'name' => $request->nama,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    ]);

                    if($request->hasFile('avatar')){
                        $resorce       = $request->file('avatar');
                        $name   = $resorce->getClientOriginalName();
                        $resorce->move(\base_path() ."/public/images", $name);
                        $save = DB::table('students')->update(['avatar' => $name]);
                        echo "Gambar berhasil di upload";
                    }else{
                        echo "Gagal upload gambar";
                    }
    //    if($request->hasfile('avatar')){
    //       $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
    //       $user->student()->avatar = $request->file('avatar')->getClientOriginalName();
    //     }
        $user->save();
        return redirect('/')->with('status','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
