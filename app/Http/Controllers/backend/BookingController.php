<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Bundle;
use App\Models\PaymentStatus;
use App\Models\BookingStatus;
use Session;

class BookingController extends Controller
{
    public function index(){
        $indexBooking= Booking::all();    
        return view('backend/booking/index', compact('indexBooking'));
    }
    // public function index() {
    //     $indexData = Package::join('statuses', 'packages.pack_status', '=', 'statuses.id')->orderBy('pack_id','desc')->get();
    //     return view('backend/package/index', compact('indexData'));
    // }


    // public function index() {
    //     $indexBooking = Booking::join('packages', 'bookings.book_location', '=', 'pack_id')->orderBy('book_id','desc')->get();
    //     return view('backend/booking/index', compact('indexBooking'));
    // }

    public function create(){ 
        $data['indexPackage']= Package::all();      
        $data['indexBundle']= Bundle::all();      
        $data['indexPayment']= PaymentStatus::all();      
        $data['indexBookingStatus']= BookingStatus::all();      
        return view('backend/booking/create',$data);
    }
    public function store(Request $request){
        $rules = [
            'location' => 'required | max:50',
            'bundle' => 'required | max:50',
            'person' => 'required | max:50',
            'name' => 'required | max:50',
            'phone' => 'required | max:30',
            'gender' => 'required | max:30',
            'birth' => 'required | max:30',
            'nid' => 'required | max:30',
            'address' => 'required | max:30',
            'city' => 'required | max:30',
            'zip' => 'required | max:30',
            'payment' => 'required | max:30',
        ];
        $v_msg=[
            'location.required'=> 'Please select your Location',
            'bundle.required'=> 'Please select your Package',
            'person.required'=> 'Please add Person',
            'name.required'=> 'Please enter your name',
            'gender.required'=> 'Please select your Gender',
            'phone.required'=> 'Please enter your phone number',
            'birth.required'=> 'Please enter your date of birth',
            'nid.required'=> 'Please enter your nid',
            'address.required'=> 'Please enter your address',
            'city.required'=> 'Please enter your city',
            'zip.required'=> 'Please enter your zip',
            'payment.required'=> 'Please select payment method',
        ];
        $this -> validate($request, $rules, $v_msg);
        $data= new Booking();
        $data->person= $request->person;
        $data->promo= $request->promo;
        $data->name= $request->name;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->birth= $request->birth;
        $data->occupation= $request->occupation;
        $data->nid= $request->nid;
        $data->address= $request->address;
        $data->city= $request->city;
        $data->zip= $request->zip;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/booking');
    }
}
