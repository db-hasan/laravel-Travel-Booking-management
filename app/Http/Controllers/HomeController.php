<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Package;
use Session;

class HomeController extends Controller
{   
    public function index(){
        $indexData= Package::all();    
        return view('frontend/home', compact('indexData'));
    }
    public function checkout(){    
        return view('frontend/checkout');
    }
}
