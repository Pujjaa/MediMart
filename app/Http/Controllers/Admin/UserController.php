<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userInfo(){
        $allData=DB::table('users')->where('role','=','Patient')->get();
        return view('user_info')->with(['allInfo'=>$allData]);
    }
     //For block user
     public function block_user($bid){
        DB::table('users')->where('id','=',$bid)->update(['auth'=>1]);
        return redirect('/userInfo')->with('message','User blocked'); 
    }

    //For unblock user
    public function unblock_user($ubid){
        DB::table('users')->where('id','=',$ubid)->update(['auth'=>0]);
        return redirect('/userInfo')->with('message','User unblocked'); 
    }

    public function userOrder($oid){
        $order = DB::table('order_details')->where('uid','=',$oid)->get();
        $user =DB::table('users')->where('id','=',$oid)->first();
        return view('adminUserOrder')->with('order',$order)->with('user',$user); 
    }
}

