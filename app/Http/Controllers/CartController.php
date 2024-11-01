<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function cart()
    {
        // Fetch all medicines from the database
        $medicines = DB::table('medicines')->get();

        return view('cart', compact('medicines'));
    }

    public function addToCart($id)
    {
        // Fetch the medicine details from the database
        $medicine = DB::table('medicines')->where('id', $id)->first();

        // Initialize cart in session if not already done
        if (!session()->has('cart')) {
            session(['cart' => []]);
        }

        // Add medicine to cart
        $cart = session('cart');
        $cart[$id] = [
            'id' => $medicine->id, // unique row ID
            'name' => $medicine->name,
            'price' => $medicine->price,
            'quantity' => isset($cart[$id]) ? $cart[$id]['quantity'] + 1 : 1,
            'attributes' => array(
                'image'=>$medicine->image,
                'company_name'=>$cmp
            )
        ];

        session(['cart' => $cart]);

        return redirect()->route('cart')->with('success', 'Medicine added to cart!');
    }
    public function showCart()
    {
        $cart = session('cart', []);
        return view('cart.show', compact('cart'));
    }

    public function removeCart($id)
    {
        // Check if the cart exists in the session
        if (session()->has('cart')) {
            $cart = session('cart');

            // Remove the item from the cart if it exists
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session(['cart' => $cart]);
            }
        }

        return redirect()->route('cart.show')->with('success', 'Medicine removed from cart!');
    }
    // public function addteocart($id){
    //     $medicine = Medicine::findOrFail($id);
    //     $cmp = $medicine->company->name;
    //     //dd($medicine)
    //     Cart::add(array(
    //         'id' => $medicine->id, // inique row ID
    //         'name' => $medicine->name,
    //         'price' => $medicine->price,
    //         'quantity' => 1,
    //         'attributes' => array(
    //             'image'=>$medicine->image,
    //             'company_name'=>$cmp
    //         )
    //     ));
    //     return redirect()->back();
    // }

    // public function checkout(){
    //     $cartCollections = \Cart::getContent();
    //     $totals = \Cart::getTotal();
    //     return view('checkout',compact('cartCollections','totals'));
    // }

    // public function confirmcheckout(Request $request){
    //     $val=Validator::make($request->all(),[
    //         'city'=>'required|string|max:30',
    //         'zipcode'=>'required|string|max:20',
    //         'house'=>'required|string|max:30',
    //         'road'=>'required|string|max:30',
    //     ]);

    //     if ($val->fails()){
    //         return redirect()->back()->withInput()->withErrors($val);
    //     }

    //     $shipping=new Shipping_address();
    //     $shipping->user_id= auth()->id();
    //     $shipping->city=$request->city;
    //     $shipping->zipcode=$request->zipcode;
    //     $shipping->house=$request->house;
    //     $shipping->road=$request->road;
    //     $shipping->save();

    //     $cartCollections = \Cart::getContent();
    //     $totals = \Cart::getTotal();
    //     $totalQuantity = \Cart::getTotalQuantity();
    //     $name =[];
    //     foreach ($cartCollections as $pd){
    //         $name[] =[
    //             'name'=>$pd->name,
    //             'quantity'=>$pd->quantity,
    //         ];
    //     }
    //     //dd($name);
    //     $order =new Order();
    //     $order->price=$totals;
    //     $order->quantity=$totalQuantity;
    //     $order->medicine_list=json_encode($name);
    //     $order->user_id=Auth::id();
    //     $order->save();

    //     return redirect()->back()->with('success','Successfully Ordered');

    // }
}
