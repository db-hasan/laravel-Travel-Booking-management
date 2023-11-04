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

    public function index() {
        $indexBooking = Booking::join('packages', 'bookings.book_location', '=', 'pack_id')
                                ->join('bundles', 'bookings.book_bundle', '=', 'bundle_id')
                                ->join('promos', 'bookings.promo', '=', 'promo_code')
                                ->join('payment_statuses', 'bookings.payment', '=', 'ps_id')
                                ->join('booking_statuses', 'bookings.book_status', '=', 'bs_id')->get();
        return view('backend/booking/index', compact('indexBooking'));
    }


    public function show($book_id=null){
        $showData = Booking::join('packages', 'bookings.book_location', '=', 'pack_id')
                            ->join('bundles', 'bookings.book_bundle', '=', 'bundle_id')
                            ->join('promos', 'bookings.promo', '=', 'promo_code')
                            ->join('payment_statuses', 'bookings.payment', '=', 'ps_id')
                            ->join('booking_statuses', 'bookings.book_status', '=', 'bs_id')->find($book_id);
        return view('backend/booking/show', compact('showData'));
    }
     // public function show($book_id=null){
    //     $showData = Booking::find($book_id);
    //     return view('backend/booking/show', compact('showData'));
    // }

    public function create(){ 
        $indexData['indexPackage']= Package::all();      
        $indexData['indexBundle']= Bundle::all();      
        $indexData['indexPayment']= PaymentStatus::all();      
        $indexData['indexBookingStatus']= BookingStatus::all();      
        return view('backend/booking/create', $indexData);
    }

    public function store(Request $request){
        $rules = [
            'location' => 'required | max:50',
            'bundle' => 'required | max:50',
            'person' => 'required | max:50',
            'promo' => 'required | max:50',
            'name' => 'required | max:50',
            'phone' => 'required | max:30',
            'gender' => 'required | max:30',
            'birth' => 'required | max:30',
            'nationality' => 'required | max:30',
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
            'promo.required'=> 'Please add promo',
            'name.required'=> 'Please enter your name',
            'gender.required'=> 'Please select your Gender',
            'phone.required'=> 'Please enter your phone number',
            'birth.required'=> 'Please enter your date of birth',
            'nationality.required'=> 'Please enter your nationality',
            'nid.required'=> 'Please enter your nid',
            'address.required'=> 'Please enter your address',
            'city.required'=> 'Please enter your city',
            'zip.required'=> 'Please enter your zip',
            'payment.required'=> 'Please select payment method',
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
        $data->payment= $request->payment;
        $data->book_status= $request->book_status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/booking');
    }

    public function edit($book_id=null){
        $indexData['indexData'] = Booking::find($book_id);
        $indexData['indexPackage']= Package::all();      
        $indexData['indexBundle']= Bundle::all();      
        $indexData['indexPayment']= PaymentStatus::all();      
        $indexData['indexBookingStatus']= BookingStatus::all(); 
        return view('backend/booking/edit', $indexData);
    }
    

    public function update(Request $request, $book_id){
        $rules = [
            'location' => 'required | max:50',
            'bundle' => 'required | max:50',
            'person' => 'required | max:50',
            'promo' => 'required | max:50',
            'name' => 'required | max:50',
            'phone' => 'required | max:30',
            // 'gender' => 'required | max:30',
            'nationality' => 'required | max:30',
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
            'promo.required'=> 'Add promo or N/A',
            'name.required'=> 'Please enter your name',
            'gender.required'=> 'Please select your Gender',
            'phone.required'=> 'Please enter your phone number',
            'birth.required'=> 'Please enter your date of birth',
            'nationality.required'=> 'Please enter your nationality',
            'nid.required'=> 'Please enter your nid',
            'address.required'=> 'Please enter your address',
            'city.required'=> 'Please enter your city',
            'zip.required'=> 'Please enter your zip',
            'payment.required'=> 'Please select payment method',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Booking::find($book_id);
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
        $data->payment= $request->payment;
        $data->book_status= $request->book_status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/booking');
    }

    public function destroy($book_id=null){
        $destroyData = Booking::find($book_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect('/admin/booking');
    }
}
