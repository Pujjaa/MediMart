<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function homePage(){
      return view('index');
    }


    // public function search(Request $request){
    //    // dd($request);
    //     $search = $request->validate([
    //        'search'=>'required|string|max:191'
    //     ]);

    //     $medicines = DB::table('medicines')->where('name','LIKE',"%{$request->search}%")->get();
    //     return view('search',compact('medicines'));
    // }

    

    public function shopPage(){
        return view('shop');
    }
    public function aboutPage(){
        return view('about');
    }

    public function contactPage(){
        return view('contact');
    }

    public function contact(Request $req){

        $req->validate(
            [
                'fname'=>"required|regex:/^[a-zA-Z ]{3,30}$/",
                'lname'=>"required|regex:/^[a-zA-Z ]{3,30}$/",
                'email'=>"required|regex:/^[a-z0-9. ]+@[a-z0-9._]+\.[a-z]{2,3}$/",
            ]);
        $contactData=[
            'fname'=>$req->input('fname'),
            'lname'=>$req->input('lname'),
            'email'=>$req->input('email'),
            'subject'=>$req->input('subject'),
            'message'=>$req->input('message'),
        ]; 
        DB::table('messages')->insert($contactData);
        return redirect('/contact')->with('message','Message sent!!');
    }


    public function cartPage(){
        return view('contact');
    }

}
