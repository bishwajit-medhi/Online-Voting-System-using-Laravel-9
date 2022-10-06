<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\candidate;
use App\Models\Votecount;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{

    public function index(){
        return view('candidate.form');
    }

    public function formSubmit(Request $request){

        $request->validate([
            
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'digits:10', 'max:10', 'unique:candidates'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:candidates'],
            'deptname' => ['required'],
            'regno' => ['required'],
            'party' => ['required'],
            'position' => ['required'],
            'gender' => ['required'],
            'document' => ['required','mimes:pdf','max:2048'],
            //'image' => ['required','mimes:jpeg,png,jpg','max:300','dimensions:max_width=200,max_height=230'],
            'image' => ['required','mimes:jpeg,png,jpg','max:300'],
            'signature' => ['required', 'mimes:jpg,png,jpeg','max:60'],
            
        ]);

        //dd($request->all());
        $record = DB::table('registrationno')
        ->where('regno', $request['regno'])->first();;
            if($record == false){
    	return redirect()->back()->with('Errormessage','student id is wrong');
            }
        $record = DB::table('candidates')->where('party',$request->party)->where('position', $request->position)->first();
        //dd($record);
        if($record == true){
            return redirect()->back()->with('Errormessage','You have already applied for these position');
        }

        $candidate = new candidate;

        $candidate->name = $request->name; 
        $candidate->mobile = $request->mobile; 
        $candidate->email = $request->email; 
        $candidate->deptname = $request->deptname;
        $candidate->regno = $request->regno; 
        $candidate->party = $request->party; 
        $candidate->position = $request->position; 
        $candidate->gender = $request->gender; 

        $document= $request->document;
        $documentName = time().'.'.$document->getClientOriginalExtension();
        $destinationPath = public_path('Document');
        $document->move($destinationPath,$documentName);
        $candidate->document = $documentName;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('Profile Image');
        $image->move($destinationPath,$imagename);
        $candidate->image = $imagename;

        $signature = $request->signature;
        $signature_name = time().'.'.$signature->getClientOriginalExtension();
        $destinationPath = public_path('Signature');
        $signature->move($destinationPath,$signature_name);
        $candidate->signature = $signature_name; 

        $candidate->save();
        
        $vote = new Votecount;
        $vote->candidate_id=$candidate->id;
        $vote->position=$candidate->position;
        //dd($candidate->id);
        
        $vote -> save(); 
        

        return redirect()->back()->with('message','Nomination Filled Successfully');

    }
    
}
