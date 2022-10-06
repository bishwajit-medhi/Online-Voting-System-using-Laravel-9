<?php

use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('student.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/',[StudentController::class,'index'])->middleware(['guest'])->name('index');
Route::get('/cast-vote',[StudentController::class,'vote'])->middleware(['auth'])->name('studentvote');
Route::post('/cast-vote',[StudentController::class,'castvote'])->name('castvote');
Route::get('/winner',[StudentController::class,'winner'])->name('winner');
Route::get('/success',[StudentController::class,'success'])->middleware(['auth'])->name('success');
