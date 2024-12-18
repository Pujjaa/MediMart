<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function adminHome(){
        return view('adminhome');
    }

    public function adminAbout(){
        return view('adminAbout');
    }

    public function adminMessage(){
        $allMes=DB::table('messages')->get();
        return view('admin_message')->with(['mesInfo'=>$allMes]);
    } 

    public function accountInfo(){
        $adminData=DB::table('users')->where('role','=','Admin')->first();
        return view('adminaccount')->with(['adminInfo'=>$adminData]);
    }
    public function adminEditView($ed){
        $adminData=DB::table('users')->where('id','=',$ed)->first();
        return view('adminEdit')->with(['adminInfo'=>$adminData]);
    }
    public function adminEdit(Request $req){
        $eid=$req->input('eid');
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
            'pincode'=>$req->input('pincode'),
        ]; 
        $update = DB::table('users')->where('id','=',$eid)->update($editData);
        
        if($update){
            return redirect('/adminAccount')->with('message','Profile Updated!!');
        }else{
            return redirect('/adminAccount')->with('message','Profile not Updated!!');
        }
    }

    public function chnPass(){
        return view('adminChnPass');
    }

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
                    return redirect('/adminAccount')->with('message','Password changed');
                }else{
                return redirect('/chnPass')->with('message','Old password and new password are same');
                }
            }else{
            return redirect('/chnPass')->with('message','Old password is not correct');
         }
    }

    
}
