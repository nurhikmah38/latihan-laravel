<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('student.index', [
            'title' => 'student',
            'students' => student::latest()->get(),

            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.Create', ['title' => 'Create Student']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
        'name' => 'required', 
        'nim' => 'required|numeric|digits:12'
    ],
    [
        'name.required' => 'nama wajib di input',
        'nim.required' => 'NIM wajib di input',
        'nim.numeric' => 'NIM wajib berupa angka',
        'nim.digits' => 'NIM wajib 12 digit',
    ]
    );

 
    student::create($validated);

 
    return redirect('/student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
