<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // pending order view
    public function orderPendingView(){
        $pending=DB::table('order_details')->where('status','=','Pending')->get();
        return view('adminOrderPending')->with('order',$pending);
    }

    // Convert pending to Approve 
    public function penToApp($id){
        DB::table('order_details')->where('id','=',$id)->update(['status'=>'Approved']);
        return redirect('/orderPending')->with('message','You have changed the status pending to approved');
    }

    //Approved order view
    public function orderApproveView(){
        $app=DB::table('order_details')->where('status','=','Approved')->get();
        return view('adminOrderApprove')->with('approve',$app);
    }

    //Approved to Delivered
    public function appToDel($id){
        DB::table('order_details')->where('id','=',$id)->update(['status'=>'Delivered']);
        return redirect('/orderApprove')->with('message','You have changed the status approve to delivered');
    }

    //Deliver order view
    public function orderDeliverView(){
        $del=DB::table('order_details')->where('status','=','Delivered')->get();
        return view('adminOrderDeliver')->with('order',$del);
    }

    //Cancelled order view
    public function orderCancelView(){
        $can=DB::table('order_details')->where('status','=','Cancelled')->get();
        return view('adminOrderCancel')->with('order',$can);
    }
}
