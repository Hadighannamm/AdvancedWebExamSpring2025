<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = courses::all();
        return view('courses.controlersIndex', compact('courses'));

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
            'descreption' => 'required',
        ]);
        students::create([
            'name' => $request->name,
            'descreption' => $request->descreption,
        ]);
        return redirect()->route('layouts.app');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses = courses::findOrFail($id);
        return view('layouts.app', compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = courses::findOrFail($id);
        return view('layouts.app', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'descreption' => 'required',
        ]);
        $courses = students::findOrFail($id);
        $course->update([
            'name' => $request->name,
            'descreption' => $request->descreption,
        ]);
        return redirect()->route('layouts.app');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = courses::findOrFail($id);
        $courses->delete();
        return redirect()->route('layouts.app');
    }
}
