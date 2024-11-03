<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class MedicineController extends Controller
{
    public function supView(){
        return view('admin_sup');
    }

    public function vitView(){
        $allVit=DB::Table('medicines')->where('category','=','Vitamins')->get();
        return view('admin_sup_vit')->with('allVitamin', $allVit);
    }

    public function minView(){
        $allMin=DB::Table('medicines')->where('category','=','Minerals')->get();
        return view('admin_sup_mineral')->with('allMineral', $allMin);
    }

    public function addProView(){
        return view('addProducts');
    }

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

    // public function index(){
    //     $companies=DB::table('companies')->get();
    //     return view('admin.addmedicine',compact('companies'));
    // }


    // public function medicinelist(){
    //     $medicines=DB::table('medicines')->get();
    //     return view('admin.medicinelist',compact('medicines'));
    // }

    // public function store(Request $request){
    //     $val=$request->validate([
    //        'name'=>'required|string|max:191',
    //         'company'=>'required|not_in:0|exists:companies,id',
    //        'price'=>'required|integer',
    //         'image'=>'required|image|mimes:jpg,jpeg,png,gif',
    //         'description'=>'required|string|'
    //     ]);
    //     //dd($request);
    //     if ($val->fails()){
    //         return redirect()->back()->withErrors($val)->withInput();
    //     }
    //     //dd($request);
    //     if($request->file('image'))
    //     $file= $request->file('image');
    //     $fileName= time().$file->getClientOriginalName();
    //     $uploadLocation= "./uploads";
    //     $file->move($uploadLocation,$fileName);

    //     DB::table('medicines')->insert([
    //         'name' => $request->input('name'),
    //         'company' => $request->input('company'),
    //         'price' => $request->input('price'),
    //         'image'=>$uploadLocation."/".$fileName,
    //         'description'=>$request->input('description')
    //     ]);
    //         return redirect()->back()->with('success','Successfully Added New Medicine');
    // }

    // public function destroy($id){
    //     $mid=$id;
    //     $medicine = DB::table('medicines')->where('id', $mid)->first();

    //     if ($medicine) {
    //         DB::table('medicines')->where('id', $mid)->delete();
    //         return redirect()->back()->with('success', 'Successfully Deleted the Medicine');
    //     }

    //     return redirect()->back()->with('error', 'Medicine not found');

    // }


    // public function edit($id){

    //     $medicine = DB::table('medicines')->where('id', $id)->first();
    //     $companies = DB::table('companies')->get();

    //     if ($medicine) {
    //         return view('admin.editmedicine', compact('medicine', 'companies'));
    //     }
    //     return redirect()->back()->with('error', 'Medicine not found');

    // }

    // public function update(Request $request){
    //     $val=$request->validate([
    //         'name'=>'required|string|max:191',
    //         'company'=>'required|not_in:0|exists:companies,id',
    //         'price'=>'required|integer',
    //         'image'=>'required|image|mimes:jpg,jpeg,png,gif',
    //         'description'=>'required|string|'
    //     ]);

    //     if ($val->fails()){
    //         return redirect()->back()->withErrors($val)->withInput();
    //     }
    //     //dd($request);
    //     $eid=$request->input('medicine_id');
    //     if($request->file('image'))
    //     $file= $request->file('image');
    //     $fileName= time().$file->getClientOriginalName();
    //     $uploadLocation= "./uploads";
    //     $file->move($uploadLocation,$fileName);

    //     DB::table('medicines')->where('id','=',$eid)->update([
    //         'name' => $request->input('name'),
    //         'company' => $request->input('company'),
    //         'price' => $request->input('price'),
    //         'image'=>$uploadLocation."/".$fileName,
    //         'description'=>$request->input('description')
    //     ]);
    //     return redirect()->back()->with('success','Successfully Updated Medicine');
    // }
}
