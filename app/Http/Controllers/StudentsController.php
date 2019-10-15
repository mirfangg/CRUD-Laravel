<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

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
        return view('students.index', ['students' => $students]);
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
    public function store(Request $request) // insert data to database
    {   
        // Option #1
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // Option #2
        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        // Validate form
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        // Option #3
        Student::create($request->all()); // the most simple one
        
        return redirect('/students')->with('status', 'Data successfully recorded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {   
        // Validate form
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        
        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan
                ]);
            return redirect('/students')->with('status', 'Data successfully changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {   
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data successfully deleted!');
    }
}
