<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Bundle;
use Session;

class HomeController extends Controller
{   
    public function index(){
        $indexData= Package::all();    
        return view('frontend/home', compact('indexData'));
    }

    public function package(){
        $indexData= Package::all();    
        return view('frontend/package/package', compact('indexData'));
    }

    public function add_pack(){   
        $indexData= Bundle::all();  
        return view('frontend/package/add_pack', compact('indexData'));
    }


    

    public function booking(){    
        return view('frontend/booking/booking'); 
    }
    public function invoice(){    
        return view('frontend/invoice'); 
    }
    // public function checkout(){    
    //     return view('frontend/checkout');
    // }
}
