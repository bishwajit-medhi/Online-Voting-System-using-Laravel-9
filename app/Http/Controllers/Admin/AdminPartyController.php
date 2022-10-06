<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPartyController extends Controller
{
    public function index(){

        $data = DB::table('parties')->get();
        //dd($data);
        return view('admin.party', compact('data'));
     }

     public function status(Request $request){
        $update = DB::table('parties');
     }
}
