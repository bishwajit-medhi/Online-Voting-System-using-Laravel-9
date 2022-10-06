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







/*----------------Student Login-----------*/ 

require __DIR__.'/student.php';
require __DIR__.'/auth.php';


/*-----------------Admin Route------------*/

require __DIR__.'/admin.php';


/*----------------Candidate Route----------*/ 




/*-----------------Party Route---------------*/ 


require __DIR__.'/party.php';

