<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CrudController extends Controller
{
   public function index(){
        return view('backend/crud/index');
    }
    public function add(){
        return view('backend/crud/add');
    }
    public function edit(){
        return view('backend/crud/edit');
    }
}
