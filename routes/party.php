<?php

use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\Party\PartyController;
use App\Http\Controllers\Party\PartyRegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('party')->group(function(){

    Route::get('/login',[PartyController::class,'index'])->middleware('partyguest')->name('PartyLogin');
    Route::post('/login',[PartyController::class,'partylogin'])->name('party.login');
    Route::get('/dashboard',[PartyController::class,'dashboard'])->name('party.dashboard')->middleware('partyauth');
    Route::get('/logout',[PartyController::class,'partylogout'])->name('party.logout')->middleware('partyauth'); 

}); 

Route::prefix('party')->group(function(){

    Route::get('register',[PartyRegisterController::class,'index'])->middleware('partyguest')->name('partyregister');
    Route::post('register',[PartyRegisterController::class,'partyRegister'])->name('party.register');

});


Route::prefix('party/candidate')->group(function(){

        Route::get('Nomination-form',[CandidateController::class,'index'])->name('nominationform')->middleware('partyauth');;
        Route::post('Nomination-form',[CandidateController::class,'formSubmit'])->name('formsubmit');
   

});