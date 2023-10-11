<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function package(){
        return view('backend/package/view_package');
    }
}
