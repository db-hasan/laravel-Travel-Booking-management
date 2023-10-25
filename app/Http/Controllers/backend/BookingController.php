<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Bundle;
use App\Models\BookingStatus;
use Session;

class BookingController extends Controller
{
    public function index(){   
        return view('backend/booking/index');
    }
    public function create(){   
        return view('backend/booking/create');
    }
    public function store(Request $request){
        $rules = [
            'name' => 'required | max:50',
            'phone' => 'required | max:30',
            'birth' => 'required | max:30',
            'nid' => 'required | max:30',
 
        ];
        $v_msg=[
            'name.required'=> 'Please enter your name',
            'phone.required'=> 'Please enter your phone number',
            'birth.required'=> 'Please enter your date of birth',
            'nid.required'=> 'Please enter your nid',
        ];
        $this -> validate($request, $rules, $v_msg);
        $data= new Booking();
        $date->person= $request->person;
        $date->promo= $request->promo;
        $date->name= $request->name;
        $date->email= $request->email;
        $date->phone= $request->phone;
        $date->birth= $request->birth;
        $date->occupation= $request->occupation;
        $date->nid= $request->nid;
        $date->address= $request->address;
        $date->city= $request->city;
        $date->zip= $request->zip;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/booking');
    }
}
