<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();
        return view('students.studentsIndex', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
        ]);
        students::create([
            'name' => $request->name,
            'age' => $request->age,
        ]);
        return redirect()->route('layouts.app');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = students::findOrFail($id);
        return view('layouts.app', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = students::findOrFail($id);
        return view('layouts.app', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
        ]);
        $students = students::findOrFail($id);
        $student->update([
            'name' => $request->name,
            'age' => $request->age,
        ]);
        return redirect()->route('layouts.app');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = students::findOrFail($id);
        $students->delete();
        return redirect()->route('layouts.app');
    }
}
