<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function patStoreSingle($id){
        $single=DB::table('medicines')->where('id','=',$id)->get();
        return view('patStoreSingle')->with('med',$single[0]);
    }

    public function patCart(Request $req){
        $userId= session()->get('session_id');
        $mid=$req->input('mid');
        $medData=DB::table('medicines')->where('id','=',$mid)->get();
        $medName=$medData[0]->name;
        $medPrice=$medData[0]->price;
        $medImage=$medData[0]->image;
        $insertCart=[
            'name'=>$medName,
            'user_id'=>$userId,
            'med_id'=>$mid,
            'price'=>$medPrice,
            'image'=>$medImage
        ];
        DB::table('cart')->insert($insertCart);
        return redirect('/cart')->with('message','Item added to cart');
    }

    public function cartView(){
        $userId=session()->get('session_id');
        $cartInfo = DB::table('cart')->where('user_id','=',$userId)->get();
        return view('cart')->with('cart',$cartInfo);
    }

    public function cartRemove($id){
        DB::table('cart')->where('id','=',$id)->delete();
        return redirect('/cart'); 
    }

}
