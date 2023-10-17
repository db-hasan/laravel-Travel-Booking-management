<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    // public function insert(Request $request){
    //     $rules = [
    //         'name' => 'required | max:20',
    //         'description' => 'required | max:50',
    //         'resort' => 'required | max:30',
    //         'price' => 'required',
    //     ];
    //     $v_msg=[
    //         'name.required'=> 'Please enter your name',
    //         'description.required'=> 'Please enter your description',
    //         'resort.required'=> 'Please enter your resort name',
    //         'price.required'=> 'Please enter your price'
    //     ];
    //     $this -> validate($request, $rules, $v_msg);

    //     $data= new Package();
    //     $data->crud_name= $request->name;
    //     $data->crud_des= $request->description;
    //     $data->resort= $request->resort;
    //     $data->crud_price= $request->price;
    //     $data->save();
    //     Session::flash('msg','Data submit successfully');
    //     return redirect('crud');
    // }
    
    public function index(){
        return view('backend/package/all');
    }

    
}
