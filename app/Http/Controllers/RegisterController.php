<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function regisView()
    {
        return view('register');
    }

    public function register(Request $req){
        $req->validate(
            [
                'name'=>"required|regex:/^[a-zA-Z ]{3,30}$/",
                'email'=>"required|regex:/^[a-z0-9. ]+@[a-z0-9._]+\.[a-z]{2,3}$/",
                'password'=>"required|between:4,16",
                'phone'=>"required|regex:/^[6789][0-9]{9}$/",
            ]);
        $submitData=[
            'name'=>$req->input('name'),
            'email'=>$req->input('email'),
            'phone'=>$req->input('phone'),
            'gender'=>$req->input('gender'),
            'password'=>$req->input('password'),
            'address'=>$req->input('address'),
            'city'=>$req->input('city'),
            'state'=>$req->input('state'),
            'pincode'=>$req->input('pincode'),
        ]; 
        DB::table('users')->insert($submitData);
        // return view("form")->with(['userInfo'=>$submitData]);
        return redirect('/loginView')->with('message','Registration successfull!!');
    }
    

   
}

