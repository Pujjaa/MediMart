<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class CompanyController extends Controller
{
    public function index(){
        return view('admin.addcompany');
    }

    public function companylist(){
        $companies=DB::table('companies')->get();
        return view('admin.companylist',compact('companies'));
    }

    public function store(Request $request){

        $val=$request->validate([
            'name'=>'required|string|max:191',
        ]);

        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        DB::table('companies')->insert([
            'name' => $request->input('name'),
        ]);

        return redirect()->back()->with('success','Successfully Added Company');
    }

    public function destroy($id){
        $company=$id;
        if (isset($company)) {
            DB::table('categories')->where('id','=',$company)->delete();
            return redirect()->back()->with('success', 'Successfully Deleted the Category');
        }
        return redirect()->back();
    }
}
