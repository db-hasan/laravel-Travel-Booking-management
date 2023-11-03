<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Bundle;
use App\Models\Booking;
use Session;

class PackController extends Controller
{
    public function package(){
        $indexData['indexPackage']= Package::all();
        $indexData['indexBundle']= Bundle::all();          
        return view('frontend/package/package', $indexData);
    }

    public function store1(Request $request){

        $step1=$request->all();

        $rules = [
            'location' => 'required | max:50',
        ];
        $v_msg=[
            'location.required'=> 'Please select your Location',
        ];
        $this -> validate($request, $rules, $v_msg);
        $data= new Booking();
        $data->book_location= $request->location;
        // $data->save();
        
        $step1['indexPackage']= Package::all();      
        return view("frontend.booking.booking", $step1);

    }

    public function store2(Request $request){

        $step2=$request->all();

        $rules = [
            'location' => 'required | max:50',
            'bundle' => 'required | max:50',
            'person' => 'required | max:50',
            'promo' => 'required | max:50',
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
        // $data->save();
        
        $step2['indexPackage']= Package::all();      
        $step2['indexBundle']= Bundle::all();
        return view("frontend.payment.payment", $step2);

    }

    
}
