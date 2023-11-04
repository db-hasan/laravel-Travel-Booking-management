<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Bundle;
use Session;

class PaymentController extends Controller
{
    public function payment(){ 
        $indexData['indexPackage']= Package::all();      
        $indexData['indexBundle']= Bundle::all();         
        return view('frontend/payment/payment', $indexData);
    }
    

    public function store(Request $request){
        $rules = [
            'location' => 'required | max:50',
            'bundle' => 'required | max:50',
            'person' => 'required | max:50',
            'promo' => 'required | max:50',
            'name' => 'required | max:50',
            'phone' => 'required | max:30',
            // 'gender' => 'required | max:30',
            'birth' => 'required | max:30',
            'nationality' => 'required | max:30',
            'nid' => 'required | max:30',
            'address' => 'required | max:30',
            'city' => 'required | max:30',
            'zip' => 'required | max:30',
            // 'payment' => 'required | max:30',
        ];
        $v_msg=[
            'location.required'=> 'Please select your Location',
            'bundle.required'=> 'Please select your Package',
            'person.required'=> 'Please add Person',
            'promo.required'=> 'Please add promo',
            'name.required'=> 'Please enter your name',
            'gender.required'=> 'Please select your Gender',
            'phone.required'=> 'Please enter your phone number',
            'birth.required'=> 'Please enter your date of birth',
            'nationality.required'=> 'Please enter your nationality',
            'nid.required'=> 'Please enter your nid',
            'address.required'=> 'Please enter your address',
            'city.required'=> 'Please enter your city',
            'zip.required'=> 'Enter zip',
            // 'payment.required'=> 'Please select payment method',
        ];
        $this -> validate($request, $rules, $v_msg);
        $data= new Booking();
        $data->book_location= $request->location;
        $data->book_bundle= $request->bundle;
        $data->person= $request->person;
        $data->promo= $request->promo;
        $data->name= $request->name;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->gender= $request->gender;
        $data->birth= $request->birth;
        $data->occupation= $request->occupation;
        $data->nationality= $request->nationality;
        $data->nid= $request->nid;
        $data->address= $request->address;
        $data->city= $request->city;
        $data->zip= $request->zip;
        // $data->payment= $request->payment;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/booking');
    }

}
