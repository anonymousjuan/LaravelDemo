<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/students/create',[StudentController::class,'create'])->name('student.create');
Route::post('/students/store',[StudentController::class,'store'])->name('student.store');