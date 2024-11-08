<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function homePage(){
        $med=DB::table('medicines')->get();
        return view('index')->with('allMed',$med);
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
        $med=DB::table('medicines')->get();
        return view('shop')->with('allMed',$med);
    }

    public function aboutPage(){
        return view('about');
    }

    public function cartPage(){
        return view('contact');
    }

}
