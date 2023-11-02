<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Bundle;
use App\Models\Booking;
use Session;

class BookController extends Controller
{
    public function booking(){
        $indexData['indexPackage']= Package::all();
        $indexData['indexBundle']= Bundle::all();          
        return view('frontend/booking/booking', $indexData);
    }
}
