<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students/create',[StudentController::class,'create'])->name('students.create');

Route::get('/students',[StudentController::class,'index'])->name('students.index');

Route::get('/students/{id}',[StudentController::class,'view'])->name('students.view');

Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');

Route::post('/students/store',[StudentController::class,'store'])->name('students.store');

Route::get('/students/{id}/edit',[StudentController::class,'edit'])->name('students.edit');

Route::put('/students/{id}/update',[StudentController::class,'update'])->name('students.update');

Route::get('/courses/create',[CoursesController::class,'create'])->name('courses.create');
Route::get('/courses',[CoursesController::class,'index'])->name('courses.index');
Route::get('/courses/{id}',[CoursesController::class,'view'])->name('courses.view');


Route::delete('/courses/{id}',[CoursesController::class,'destroy'])->name('courses.destroy');

Route::post('/courses/store',[CoursesController::class,'store'])->name('courses.store');

Route::get('/courses/{id}/edit',[CoursesController::class,'edit'])->name('courses.edit');

Route::put('/courses/{id}/update',[CoursesController::class,'update'])->name('courses.update');
