<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class MedicineController extends Controller
{

    //supplements page view
    public function supView(){
        return view('admin_sup');
    }

    //vitamin page view
    public function vitView(){
        $allVit=DB::table('medicines')->where('category','=','Vitamins')->get();
        return view('admin_sup_vit')->with('allVitamin', $allVit);
    }

    //minerals page view
    public function minView(){
        $allMin=DB::table('medicines')->where('category','=','Minerals')->get();
        return view('admin_sup_mineral')->with('allMineral', $allMin);
    }

    //herbal page view
    public function herView(){
        $allHer=DB::table('medicines')->where('category','=','Herbals')->get();
        return view('admin_sup_herbal')->with('all', $allHer);
    }

    //protein page view
    public function proView(){
        $allPro=DB::table('medicines')->where('category','=','Proteins')->get();
        return view('admin_sup_protein')->with('all', $allPro);
    }

    //probiotic page view
    public function probioView(){
        $allPro=DB::table('medicines')->where('category','=','Probiotics')->get();
        return view('admin_sup_probiotic')->with('all', $allPro);
    }
    //probiotic page view
    public function imuView(){
        $allImu=DB::table('medicines')->where('category','=','Imune')->get();
        return view('admin_sup_imune')->with('all', $allImu);
    }

    //add medicines form view
    public function addProView(){
        return view('addProducts');
    }

    //add medicines
    public function addProSub(Request $req){
        $req->validate(
            [
                'name'=>"required",
                'image'=>"required",
                'price' =>"required",
                'category' =>"required",
                'description' => "required"
        
            ]);
            $name= $req->input('name');
            $image=$req->input('image');
            $price=$req->input('price');
            $category=$req->input('category');
            $desc=$req->input('description');
            if($req->file('image'))
            $file= $req->file('image');
            $fileName= time().$file->getClientOriginalName();
            $uploadLocation= "./uploads";
            $file->move($uploadLocation,$fileName);

            $addData=[
                'name'=>$name,
                'image'=>$uploadLocation."/".$fileName,
                'price'=>$price,
                'category'=>$category,
                'description'=>$desc
            ]; 
            $submit=DB::table('medicines')->insert($addData);
    
        return redirect('/addProduct')->with('message','Added successful..');
    }


    //delete medicines
    public function medDelete($id,$cat){
    $delData=DB::table('medicines')->where('id','=',$id)->orWhere('category','=',$cat)->delete();

        if($delData){
            if($cat=='Vitamins'){
                return redirect('/adminSupVit')->with('message','Deleted...');
            }elseif($cat=='Minerals'){
                return redirect('/adminSupMin')->with('message','Deleted...');
            }elseif($cat=='Herbals'){
                return redirect('/adminSupHer')->with('message','Deleted...');
            }elseif($cat=='Proteins'){
                return redirect('/adminSupPro')->with('message','Deleted...');
            }elseif($cat=='Probiotics'){
                return redirect('/adminSupProbio')->with('message','Deleted...');
            }else{
                return redirect('/adminSupImu')->with('message','Deleted...');
            }
        }else{
            return redirect('/adminSup');
        }
    }

    //edit product view
    public function editProView($id,$cat){
        $editData=DB::table('medicines')->where('id','=',$id)
                                        ->orWhere('category','=',$cat)
                                        ->get();
        return view('editProducts')->with(['editMed'=>$editData[0]]);
    }

    //edit medicines 
    public function editProSub(Request $req){
        $req->validate(
            [
                'name'=>"required",
                'image'=>"required",
                'price' =>"required",
                'description' =>"required"
        
            ]);
            $id=$req->input('eid');
            $cat=$req->input('cat');
            $name= $req->input('name');
            $image=$req->input('image');
            $price=$req->input('price');
            $desc=$req->input('description');

            if($req->file('image'))
            $file= $req->file('image');
            $fileName= time().$file->getClientOriginalName();
            $uploadLocation= "./uploads";
            $file->move($uploadLocation,$fileName);

            $editData=[
                'name'=>$name,
                'image'=>$uploadLocation."/".$fileName,
                'price'=>$price,
                'description'=>$desc
            ]; 
            $submit=DB::table('medicines')->where('id','=',$id)
                                          ->orWhere('category','=',$cat)
                                          ->update($editData);
        if($submit){
            return redirect()->back()->with('message','Update successful..');
        }else{
            return redirect()->back()->with('message','Not Updated');
        }
    
    }

}
