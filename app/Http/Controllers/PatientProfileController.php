<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PatientProfileController extends Controller
{
    public function patHome(){
        return view('PatientHome');
    }

    
}
