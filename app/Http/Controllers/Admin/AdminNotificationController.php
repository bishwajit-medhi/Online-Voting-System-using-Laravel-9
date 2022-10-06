<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminNotificationController extends Controller
{
    public function index(){
        
        $data = DB::table('notifications')->get();
        $count = 1;

        return view('admin.Notification',compact('data','count'));

    }
    public function message(Request $request)
    {

       // dd($count);
        
            DB::table('notifications')
            ->insert(['notification'=>$request['message']]);
            return redirect()->back()->with('successmessage','Message Updated Successfully');
        
    }
    public function updatemessage(Request $request)
    {
        // dd($count);
            DB::table('notifications')
             ->where('id', $request['message'])
             ->delete();
             return redirect()->back()->with('successmessage','Message Updated Successfully');
        
    }
}
