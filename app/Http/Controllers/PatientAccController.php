<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class PatientAccController extends Controller
{
    // patient account view page
    public function accountInfo(){
        $userId= session()->get('session_id');
        $patData=DB::table('users')->where('id','=',$userId)->get();
        return view('PatAccount')->with(['info'=>$patData[0]]);
    }

    //patient account update view page
    public function patEditView(){
        $userId= session()->get('session_id');
        $patData=DB::table('users')->where('id','=',$userId)->first();
        return view('patEdit')->with(['info'=>$patData]);
    }

    //patient account update submit 
    public function patEdit(Request $req){
        $userId= session()->get('session_id');
        $req->validate(
            [
                'name'=>"required|regex:/^[a-zA-Z ]{3,30}$/",
                'email'=>"required|regex:/^[a-z0-9. ]+@[a-z0-9._]+\.[a-z]{2,3}$/",
                'phone'=>"required|regex:/^[6789][0-9]{9}$/",
            ]);

        $editData=[
            'name'=>$req->input('name'),
            'email'=>$req->input('email'),
            'phone'=>$req->input('phone'),
            'gender'=>$req->input('gender'),
            'address'=>$req->input('address'),
            'city'=>$req->input('city'),
            'state'=>$req->input('state'),
            'pincode'=>$req->input('pincode')
        ]; 

        $update=DB::table('users')->where('id','=',$userId)->update($editData);
        if($update){
            return redirect('/patAccount')->with('message','Profile Updated!!');
        }else{
            return redirect('/patAccount')->with('message','Profile not Updated!!');
        }
    }

    //change password view page
    public function chnPass(){
        return view('PatChnPass');
    }

    // change password submit 
    public function chnPassSub(Request $req){

        $req->validate([
            'oldpass'=>"required|between:3,16",
            'newpass'=>"required|between:3,16",
            'cnfpass'=>"required|same:newpass"
        ]);
        $chnpId= session()->get('session_id');
        $oldpass=$req->input('oldpass');
        $newpass=$req->input('newpass');
        $cnfpass=$req->input('cnfpass');
        $chnpassId=DB::table('users')->where('id','=',$chnpId)
                                        ->get();
        $dbpass=$chnpassId[0]->password;

        if($oldpass==$dbpass){
            if($oldpass!=$newpass){
                    DB::table('users')->where('id','=',$chnpId)->update(['password'=>$cnfpass]);
                    return redirect('/patAccount')->with('message','Password changed');
                }else{
                return redirect('/patChnPass')->with('message','Old password and new password are same');
                }
            }else{
            return redirect('/patChnPass')->with('message','Old password is not correct');
         }
    }
    
}
