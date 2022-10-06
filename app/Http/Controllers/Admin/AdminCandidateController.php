<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\candidate;
use App\Models\Votecount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCandidateController extends Controller
{
    public function index(){
        
        $president = candidate::where('position','=','president')->get();
        $gs = candidate::where('position','=','General Secratery')->get();
        $ags = candidate::where('position','=','Assistant General Secratery')->get();

        return view('admin.candidate',compact('president','gs','ags'));
    }

    public function updatestatus(Request $request){

        //dd($request->all());

        if($request['approve'] != null AND $request['reject']== null )
       
        {
           /* //dd($request->approve);
            $vote = new Votecount;
            $vote->candidate_id=$request->approve;
            //dd($candidate->id);
            
            $vote -> save(); 
*/
        
        DB::table('candidates')
        ->where('id', $request['approve'])
        ->update(['status' => 'Approved']);
        
        return redirect()->back()->with('successmessage','Approved');
        }

        
        Votecount::where('id','=',$request->reject)->delete();
        
        DB::table('candidates')
        ->where('id', $request['reject'])
        ->update(['status' => 'Rejected']);

        

        return redirect()->back()->with('rejectmessage','Rejected');


        
    }
    
}

