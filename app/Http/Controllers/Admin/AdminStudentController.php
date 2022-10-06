<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminStudentController extends Controller
{
    public function index(){

        $data = User::all();
        return view('admin.student',compact('data'));
     }

     public function addstudent(Request $request){

        $request->validate([
            'regno' => ['required'], 
        ]);

        $record = DB::table('registrationno')
        ->where('regno', $request['regno'])->first();;
            if($record == true){
    	return redirect()->back()->with('Errormessage','Data Already Exist');
            }

        DB::table('registrationno')->insert([
            'regno'=>$request->input('regno'),
    	   ]);
        return redirect()->back()->with('message','Data Added Successfully');
     }
}
