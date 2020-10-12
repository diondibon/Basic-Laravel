<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('Students/index', ['students' => $students]);
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
    public function store(Request $request)
    {
        // CARA VALIDASI ERROR
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:15',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        // CARA 1
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->npm = $request->npm;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        // CARA 2
        // Student::create([
        //     'nama' => $request->nama,
        //     'npm' => $request->npm,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        // CARA 3
        // + menambahkan code pada model
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Berhasil Ditambahkan!');
    }

  /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
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
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:15',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        
        Student::where('id', $student->id)
        ->update([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/students')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Berhasil Dihapus!');
    }
}
