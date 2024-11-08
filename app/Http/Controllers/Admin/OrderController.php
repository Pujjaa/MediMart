<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function orderPendingView(){
        $pending=DB::table('order_details')->where('status','=','Pending')->get();
        return view('adminOrderPending')->with('order',$pending);
    }

    public function penToApp($id){
        DB::table('order_details')->where('id','=',$id)->update(['status'=>'Approved']);
        return redirect('/orderPending')->with('message','You have approved the user');
    }

    public function orderApproveView(){
        $app=DB::table('order_details')->where('status','=','Approved')->get();
        return view('adminOrderApprove')->with('approve',$app);
    }
    public function appToDel($id){
        DB::table('order_details')->where('id','=',$id)->update(['status'=>'Delivered']);
        return redirect('/orderApprove')->with('message','You have approved the user');
    }

    public function orderDeliverView(){
        $del=DB::table('order_details')->where('status','=','Delivered')->get();
        return view('adminOrderDeliver')->with('order',$del);
    }
    public function orderCancelView(){
        $can=DB::table('order_details')->where('status','=','Cancelled')->get();
        return view('adminOrderCancel')->with('order',$can);
    }
}
