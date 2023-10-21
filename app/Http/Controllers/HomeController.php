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

    public function booking(){   
        $indexData= Bundle::all();  
        return view('frontend/package/booking', compact('indexData'));
    }

    public function payment(){    
        return view('frontend/payment/payment'); 
    }
    public function invoice(){    
        return view('frontend/invoice'); 
    }
    public function service(){    
        return view('frontend/service'); 
    }
    public function about(){    
        return view('frontend/about'); 
    }
    public function contact(){    
        return view('frontend/contact'); 
    }
    // public function checkout(){    
    //     return view('frontend/checkout');
    // }
}
