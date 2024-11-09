<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

class LoginController extends Controller
{
    
    // login form page
    public function loginView(){
        return view('login');
    }
   
    // login submit
    public function login(Request $req){
        $userName=$req->input('email');
        $password=$req->input('password');
        $loginData=DB::table('users')->where('email','=',$userName)->get();

        if(empty($loginData[0])){
            return redirect('/loginView')->with('message','User do not found');
        }else{
            $dbPassword=$loginData[0]->password;
            $user=$loginData[0]->role;
            $auth=$loginData[0]->auth;
            if($auth==0){
                if($password==$dbPassword && $user=='Admin'){
                    $uid=$loginData[0]->id;
                    $req->session()->put('session_id',$uid);
                    return redirect('/adminHome')->with('message','Logged in..');
                }elseif($password==$dbPassword){
                    $uid=$loginData[0]->id;
                    $req->session()->put('session_id',$uid);
                    return redirect('/patHome')->with('message','Logged in..');
                }else{
                    return redirect('/loginView')->with('message','Wrong Password');
                }
            }else{
                return redirect('/loginView')->with('message','Admin blocked you');
            }
        }                               
    }

    //Account delete
    public function deleteAccount(){
        $uid = session()->get('session_id');
        DB::table('users')->where('id','=',$uid)->delete();
        DB::table('order_details')->where('uid','=',$uid)->delete();
        DB::table('cart')->where('user_id','=',$uid)->delete();
        return redirect('/loginView')->with('message','Your account is delete..'); 
    }

    // logged out
    public function logout(Request $req){
        $req->session()->invalidate();
        $req->session()->flush();
        $req->session()->regenerateToken();
        $cookie = \Cookie::forget($req->session()->getName());
        return redirect('/home')->withCookie($cookie);
    }

}
