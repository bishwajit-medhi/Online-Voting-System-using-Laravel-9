<?php

use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/dashboard', function () {
    return view('student.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/',[StudentController::class,'index'])->middleware(['guest'])->name('index');
Route::get('/cast-vote',[StudentController::class,'vote'])->middleware(['auth'])->name('studentvote');
Route::post('/cast-vote',[StudentController::class,'castvote'])->name('castvote');
Route::get('/winner',[StudentController::class,'winner'])->name('winner');
Route::get('/success',[StudentController::class,'success'])->middleware(['auth'])->name('success');

/*----------------Student Login-----------*/ 

require __DIR__.'/auth.php';


/*-----------------Admin Route------------*/

require __DIR__.'/admin.php';


/*----------------Candidate Route----------*/ 




/*-----------------Party Route---------------*/ 


require __DIR__.'/party.php';

