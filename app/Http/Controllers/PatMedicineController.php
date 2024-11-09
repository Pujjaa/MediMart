<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class PatMedicineController extends Controller
{

    // patient medicine store page
    public function patStore(){
        return view('patStore');
    }
    
    // patient medicine vitamin 
    public function patStoreVit(){
        $vit=DB::table('medicines')->where('category','=','Vitamins')->get();
        return view('patStoreVit')->with('allVit',$vit);
    }
    
    // patient medicine mineral
    public function patStoreMin(){
        $min=DB::table('medicines')->where('category','=','Minerals')->get();
        return view('patStoreMin')->with('all',$min);
    }

    // patient medicine herbal
    public function patStoreHer(){
        $her=DB::table('medicines')->where('category','=','Herbals')->get();
        return view('patStoreHer')->with('all',$her);
    }

    // patient medicine Protein
    public function patStorePro(){
        $pro=DB::table('medicines')->where('category','=','Proteins')->get();
        return view('patStorePro')->with('all',$pro);
    }

    // patient medicine probiotics
    public function patStoreProbio(){
        $probio=DB::table('medicines')->where('category','=','Probiotics')->get();
        return view('patStoreProbio')->with('all',$probio);
    }

    // patient medicine imune
    public function patStoreImu(){
        $imu=DB::table('medicines')->where('category','=','Imune')->get();
        return view('patStoreImu')->with('all',$imu);
    }

    
}
