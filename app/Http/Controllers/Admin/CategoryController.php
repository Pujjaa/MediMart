<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.addcategory');
    }

    public function categorylist(){
        $categories=DB::table('categories')->get();
        return view('admin.categorylist',compact('categories'));
    }

    public function store(Request $request){
        $val=validate([
            'name'=>'required|string|max:191',
        ]);

        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        DB::table('categories')->insert([
            'name' => $request->input('name'),
        ]);

        return redirect()->back()->with('success','Successfully Added Category');

    }

    public function destroy($id){
        $category=$id;
        if (isset($category)) {
            DB::table('categories')->where('id','=',$category)->delete();
            return redirect()->back()->with('success', 'Successfully Deleted the Category');
        }
        return redirect()->back();
    }
}
