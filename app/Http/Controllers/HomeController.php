<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Bundle;
use App\Models\Booking;
use Session;

class HomeController extends Controller
{   
    public function index(){   
        return view('frontend/home');
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
    
}
