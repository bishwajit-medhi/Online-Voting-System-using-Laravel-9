<?php

namespace App\Http\Controllers\Party;

use App\Http\Controllers\Controller;
use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PartyRegisterController extends Controller
{
    public function index(){

        return view('party.register');
        
    }

    public function partyRegister(Request $request){
        $request->validate([
            
            'regid' => ['required'],
            'name' => ['required', 'string', 'max:255','unique:parties'],
            'mobile' => ['required', 'digits:10', 'max:10', 'unique:parties'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:parties'],
            'image' => ['required','mimes:jpg,png,jpeg','max:300'],
           
            
        ]);

        //dd($request->all());

        $party = new Party;

        $party->regid = $request->regid; 
        $party->name = $request->name; 
        $party->mobile = $request->mobile; 
        $party->email = $request->email;
        $party->password = Hash::make($request->password);
       

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
         //dd($imagename);
        $destinationPath = public_path('Party ID Image');
        $image->move($destinationPath,$imagename);
        $party->image = $imagename;

        

        $party->save();

        return redirect()->route('party.dashboard')->with('message','Party Registration Successfull');
    }

    public function dashboard(){
        return view('party.dashboard');
    }
}
