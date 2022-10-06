<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\candidate;
use App\Models\User;
use App\Models\Votecount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){

        
        return view('admin.login');
    }

    public function login(Request $request){
        //dd($request->all());
       
       

        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' =>$check['email'], 'password' => $check['password'] ])){
            
            return redirect()->route('admin.dashboard');
        }
        else{
            return redirect()->back()->with('error','Username or Password Wrong');
        }
    }

    public function dashboard(){
        $user = User::count();
        $candidate = candidate::where('status','=','Approved')->count();
        $totaluser = DB::table('registrationno')->count();
        $voted = User::where('isvoted','=','yes')->count();

       
        
            $president = candidate::join('votecounts', 'votecounts.candidate_id' ,'=', 'candidates.id')
            ->get(['candidates.name','candidates.party','candidates.status','candidates.position','votecounts.votecount','votecounts.candidate_id','votecounts.iswinner']);
            $gs = $president;
            $ags = $president;
        //dd($data);
        
        return view('admin.dashboard',compact('user','candidate','totaluser','voted','president','gs','ags'));
    }

    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('Adminlogin');
    }    

    public function updatewinner(Request $request){

        //dd($request->candidate);
       DB::table('votecounts')->where('candidate_id',$request['candidate'])->update(['iswinner'=>'1']);

       return redirect()->back();
    } 
    
}
