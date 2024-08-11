<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
