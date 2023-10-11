<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(){
        return view('backend/booking/view_booking');
    }
}
