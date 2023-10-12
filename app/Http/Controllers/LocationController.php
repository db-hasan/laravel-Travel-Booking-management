<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function location(){
        return view('backend/location/view_location');
    }
}
