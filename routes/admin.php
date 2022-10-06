<?php

use App\Http\Controllers\Admin\AdminCandidateController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminNotificationController;
use App\Http\Controllers\Admin\AdminPartyController;
use App\Http\Controllers\Admin\AdminStudentController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){

Route::get('/login',[AdminController::class,'index'])->middleware('adminguest')->name('Adminlogin');
Route::post('/login',[AdminController::class,'login'])->name('admin.login');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('adminauth'); 
Route::post('/updatewinner',[AdminController::class,'updatewinner'])->name('updatewinner');
Route::get('/logout',[AdminController::class,'adminLogout'])->name('admin.logout')->middleware('adminauth'); 

});

Route::prefix('admin')->group(function(){
    Route::get('/student-details',[AdminStudentController::class,'index'])->name('adminstudent');
    Route::post('/student-details',[AdminStudentController::class,'addstudent'])->name('addstudent');
});

Route::prefix('admin')->group(function(){

    Route::get('/party-details',[AdminPartyController::class,'index'])->name('adminparty');

});
Route::prefix('admin')->group(function(){

    Route::get('/candidate-details',[AdminCandidateController::class,'index'])->name('admincandidate');
    Route::post('/updatestatus',[AdminCandidateController::class,'updatestatus'])->name('updatestatus');
    //Route::get('/rejected',[AdminCandidateController::class,'reject'])->name('rejected');
});
Route::prefix('admin')->group(function(){

    Route::get('/notification',[AdminNotificationController::class,'index'])->name('notificationview');
    Route::post('/notification',[AdminNotificationController::class,'message'])->name('notification');
    Route::post('/notification-update',[AdminNotificationController::class,'updatemessage'])->name('notificationupdate');

});


