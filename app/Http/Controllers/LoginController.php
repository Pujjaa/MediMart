<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    
    public function loginView(){
        return view('login');
    }
   

    public function login(Request $req){
        $userName=$req->input('email');
        $password=$req->input('password');
        $loginData=DB::table('users')->where('email','=',$userName)->get();

        if(empty($loginData[0])){
            return redirect('/loginView')->with('message','User do not found');
        }else{
            $dbPassword=$loginData[0]->password;
            $user=$loginData[0]->role;
            if($password==$dbPassword && $user=='Admin'){
                return redirect('/adminhome');
            }elseif($password==$dbPassword){
                $uid=$loginData[0]->id;
                $req->session()->put('session_id',$uid);
                return redirect('/userHome');
            }else{
                return redirect('/loginView')->with('message','Wrong Password');
            }
        }                               
    }

    public function userHome(){
        $userId= session()->get('session_id');
        $userData=DB::table('users')->where('id','=',$userId)->get();
        return redirect('/home')->with(['userInfo'=>$userData]); 
    }



    // public function login(Request $req){

    //     $user = $req->input('email'); 
    //     $pass = $req->input('password'); 
      
    //     $logdata = DB::table('users')->where('email', '=', $user)->get();
        
    //     if ($logdata->isEmpty()) {
    //         return redirect('/loginView')->with('message', 'User Not Found');
    //     } else {
    //         $dbpass = $logdata[0]->password; 
    //         $role = $logdata[0]->role; 
    //         $auth = $logdata[0]->auth; 
    //         $req->session()->put('session_role', $role);
            
    //         if ($pass == $dbpass) {
    //             $uid = $logdata[0]->user_id;
    //             $uname = $logdata[0]->name;
    //             $uemail = $logdata[0]->email;
    //             $uphone = $logdata[0]->phone;
                
    //             $req->session()->put('session_id', $uid);
                
    //             if ($auth == 0) {
    //                 if ($role == 'Admin') {
    //                     $req->session()->put('session_name', $uname);
    //                     $req->session()->put('session_email', $uemail);
    //                     $req->session()->put('session_phone', $uphone);
                        
    //                     return redirect('/adminhome');
    //                 } else {
    //                     // Setting session values for normal user
    //                     $req->session()->put('session_name', $uname);
    //                     $req->session()->put('session_email', $uemail);
    //                     $req->session()->put('session_phone', $uphone);
                        
    //                     return redirect('/home');
    //                 }
    //             } else {
    //                 return redirect('/loginView')->with('message', 'User Blocked, Contact Admin');
    //             }
    //         } else {
    //             return redirect('/loginView')->with('message', 'Password Not Matched');
    //         }
    //     }
    
    // }


}
