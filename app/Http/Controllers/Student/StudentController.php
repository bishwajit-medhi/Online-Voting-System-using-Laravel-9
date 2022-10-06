<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\candidate;
use App\Models\User;
use App\Models\Votecount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index(){
       $data = DB::table('notifications')->get();

        return view('student.index', compact('data'));
    }

    public function vote(){

        if(Auth::user()->isvoted == "yes"){
            // dd(Auth::user()->status);
             return redirect()->route('success');
         }
        
         $president = candidate::where('position','=','president')->where('status','=','approved')->get();
         $gs = candidate::where('position','=','General Secratery')->where('status','=','approved')->get();
         $ags = candidate::where('position','=','Assistant General Secratery')->where('status','=','approved')->get();
 
         return view('student.vote',compact('president','gs','ags'));

    }

    public function castvote(Request $request){
        
            Votecount::where('candidate_id','=',$request->president)->increment('votecount',1);
            Votecount::where('candidate_id','=',$request->general)->increment('votecount',1);
            Votecount::where('candidate_id','=',$request->ags)->increment('votecount',1);

        
        User::where('id','=',auth::user()->id)->update(['isvoted'=>'yes']);
        return redirect()->route('success');
    }

    public function winner(){

            $pcount = Votecount::where("position",'=','president')->max('votecount');
            $gscount = Votecount::where("position",'=','General Secratery')->max('votecount');
            $agscount = Votecount::where("position",'=','Assistant General Secratery')->max('votecount');
                
            

            $p = candidate::join('votecounts', 'votecounts.candidate_id' ,'=', 'candidates.id')
            ->get(['candidates.name','candidates.party','candidates.status','candidates.position','votecounts.votecount','votecounts.iswinner']);
            $gs = candidate::join('votecounts', 'votecounts.candidate_id' ,'=', 'candidates.id')
            ->get(['candidates.name','candidates.party','candidates.status','candidates.position','votecounts.votecount','votecounts.iswinner']);
            $ags = candidate::join('votecounts', 'votecounts.candidate_id' ,'=', 'candidates.id')
            ->get(['candidates.name','candidates.party','candidates.status','candidates.position','votecounts.votecount','votecounts.iswinner']);

        return view('student.winner', compact('p','gs','ags','pcount'));
    }

    public function success(){

        return view('student.success');
    }

}
