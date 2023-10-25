<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Status;
use Session;

class BookingController extends Controller
{
    public function index(){   
        return view('backend/booking/index');
    }
    public function create(){   
        return view('backend/booking/create');
    }
}
