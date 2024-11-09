<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class PatOrderController extends Controller
{

    // patient order page
    public function orderView(){
        $userId=session()->get('session_id');
        $order=DB::table('order_details')->where('uid','=',$userId)->get();
      
        return view('patOrder')->with('order',$order);
    }

    // order cancel
    public function calOrder($id){
        DB::table('order_details')->where('id','=',$id)->update(['status'=>'Cancelled']);
        return redirect()->back()->with('message','Order Cancelled');
    }

}

