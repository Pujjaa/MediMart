<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    public function checkoutView(){
        $userId=session()->get('session_id');
        $cartInfo = DB::table('cart')->where('user_id','=',$userId)->get();
        return view('checkout')->with('cart',$cartInfo);
    }

    public function orderPlaced(){
        return view('thankyou');
    }
    
    public function checkoutSub(Request $req){
        $userId=session()->get('session_id');
        $req->validate(
            [
                'country'=>"required",
                'name'=>"required|regex:/^[a-zA-Z ]{3,30}$/",
                'address'=>"required",
                'state'=>"required",
                'postal'=>"required",
                'email'=>"required|regex:/^[a-z0-9. ]+@[a-z0-9._]+\.[a-z]{2,3}$/",
                'phone'=>"required|regex:/^[6789][0-9]{9}$/",
                
            ]);
            $mid=$req->input('mid');
            $medInfo=DB::table('medicines')->where('id','=',$mid)->get();
            $medName=$medInfo[0]->name;
            $medImg=$medInfo[0]->image;
            $medPrice=$medInfo[0]->price;

        $submitData=[
            'uid'=>$userId,
            'mid'=>$mid,
            'mName'=>$medName,
            'mImage'=>$medImg,
            'mPrice'=>$medPrice,
            'country'=>$req->input('country'),
            'name'=>$req->input('name'),
            'address'=>$req->input('address'),
            'state'=>$req->input('state'),
            'postal'=>$req->input('postal'),
            'email'=>$req->input('email'),
            'phone'=>$req->input('phone')
        ]; 
        DB::table('order_details')->insert($submitData);
        return redirect('/thankYou');
    }
    
    
    
}
