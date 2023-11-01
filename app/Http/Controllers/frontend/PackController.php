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
    public function store(Request $request){
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
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('frontend/payment/payment');
    }
}
