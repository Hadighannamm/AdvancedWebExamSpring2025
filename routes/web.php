<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', Studentcontroller::class);
Route::resource('courses', CourseController::class);


Route::get('/students', function () {
    return response()->json(User::all());
});