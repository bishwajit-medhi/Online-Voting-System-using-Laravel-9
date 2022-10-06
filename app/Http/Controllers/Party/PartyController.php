<?php

namespace App\Http\Controllers\Party;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartyController extends Controller
{
    public function index(){

        return view('party.login');
        
    }

    public function partylogin(Request $request){
        //dd($request->all());
        $check = $request->all();
        if(Auth::guard('party')->attempt(['email' =>$check['email'], 'password' => $check['password'] ])){
            return redirect()->route('party.dashboard');
        }
        else{
            return redirect()->back()->with('error','Username or Password Wrong');
        }
    }

    public function dashboard(){
        
        return view('party.dashboard');
    }

    public function partylogout(){
        Auth::guard('party')->logout();
        return redirect()->route('PartyLogin');
    }    
}
