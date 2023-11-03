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

    public function store(Request $request){

        $step=$request->all();

        $rules = [
            'location.required'=> 'Please select your Location',
            'bundle.required'=> 'Please select your Package',
            'person.required'=> 'Please add Person',
            'promo.required'=> 'Please add promo',
        ];
        $v_msg=[
            'location.required'=> 'Please select your Location',
            'bundle.required'=> 'Please select your Package',
            'person.required'=> 'Please add Person',
            'promo.required'=> 'Please add promo',
        ];

        $this -> validate($request, $rules, $v_msg);
        $data= new Booking();
        $data->book_location= $request->location;
        $data->book_bundle= $request->bundle;
        $data->person= $request->person;
        $data->promo= $request->promo;
        
        $step['indexPackage']= Package::all();      
        $step['indexBundle']= Bundle::all(); 

        return view("frontend.payment.payment", $step);

    }

}
