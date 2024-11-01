<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function adminHome(){
        return view('adminhome');
    }

    public function userInfo(){
        $allData=DB::table('users')->where('role','=','Patient')->get();
        return view('user_info')->with(['allInfo'=>$allData]);
    }
    public function accountInfo(){
        $adminData=DB::table('users')->where('role','=','Admin')->first();
        return view('adminaccount')->with(['adminInfo'=>$adminData]);
    }
    public function adminEditView($ed){
        $adminData=DB::table('users')->where('id','=',$ed)->first();
        return view('adminEdit')->with(['adminInfo'=>$adminData]);
    }
    
}
