<?php

namespace App\Http\Controllers;

use App\User;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'required|email:rfc,dns',
            'jurusan' => 'required',
            'avatar' => 'required',
            
            ]);
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();
        
        $request->request->add(['user_id' => $user->id ]);
        $student = new \App\Student;
        $student->user_id = $request->user_id;
        $student->nama = $request->nama;
        $student->nrp = $request->nrp;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;
        $student->avatar = $request->avatar;
            // Student::create($request->all());
            // Student::create([
                //             'nama' => $request->nama,
                //             'nrp' => $request->nrp,
                //             'email' => $request->email,
                //             'jurusan' => $request->jurusan,
                //             'avatar' => $request->avatar,
                //         ]);
                if ($request->hasfile('avatar')){
                    $file = $request->file('avatar');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('images/',$filename);
                    $student->avatar = $filename;
                } else{
                    return $request;
                    $student->avatar ='';
                }
                $student->save();
                
                return redirect('/students')->with('data','Data Berhasil Ditambahkan');
            }
            
            /**
             * Display the specified resource.
             *
             * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student = \App\Student::find($student->id);
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'required|email:rfc,dns',
            'jurusan' => 'required'
        ]);
        
        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'nrp' => $request->nrp,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan,
                    'avatar' => $request->avatar,
                ]);
        if($request->hasfile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $student->avatar = $request->file('avatar')->getClientOriginalName();
            $student->save();
        }
        return redirect('/students')->with('status','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        
         Student::destroy($student->id);
         return redirect('/students')->with('status','Data Berhasil Dihapus!');
    }
}
