<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class PatientProfileController extends Controller
{
    //patient home page
    public function patHomeView(){
        $med=DB::table('medicines')->get();
        return view('PatientHome')->with(['allMed'=>$med]); 
    }

    // patient about page
    public function patAboutView(){
        return view('patAbout');
    }

    // patient contact form view page
    public function contactPage(){
        return view('contact');
    }

    // patient contact submit 
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
        $sub = DB::table('messages')->insert($contactData);
        if($sub){
            return redirect('/contact')->with('message','Message sent!!');
        }else{
            return redirect('/contact')->with('message','Message not sent!!');
        }
    }

}
