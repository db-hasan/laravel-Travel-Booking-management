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

    public function booking($pack_id=null){
        $indexData['indexPackage']= Package::find($pack_id);
        $indexData['indexBundle']= Bundle::all();          
        return view('frontend/booking/booking', $indexData);
    }

    public function store(Request $request){

        $step=$request->all();

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
            'promo.required'=> 'Please add promo or N/A',
        ];
        $this -> validate($request, $rules, $v_msg);
        $data= new Booking();
        $data->book_location= $request->location;
        $data->book_bundle= $request->bundle;
        $data->person= $request->person;
        $data->promo= $request->promo;
        // $data->save();
        
        $step['indexPackage']= Package::all();      
        $step['indexBundle']= Bundle::all();
        return view("frontend.payment.payment", $step);
    }

}
