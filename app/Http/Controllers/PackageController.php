<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Package;
use Session;

class PackageController extends Controller
{
    public function index(){
        $indexData= Package::all();    
        return view('backend/package/all', compact('indexData'));
    }

    // -----------insert data start----------
    public function add(){
        return view('backend/package/add');
    }
    public function insert(Request $request){
        $rules = [
            'location' => 'required | max:20',
            'description' => 'required | max:50',
            'resort' => 'required | max:30',
            'price' => 'required | max:30',
            'fromdate' => 'required',
            'todate' => 'required',
            'arrival' => 'required',
        ];
        $v_msg=[
            'location.required'=> 'Please enter your location',
            'description.required'=> 'Please enter your description',
            'resort.required'=> 'Please enter your resort name',
            'price.required'=> 'Please enter your price',
            'fromdate.required'=> 'Please enter your Data',
            'todate.required'=> 'Please enter your Data',
            'arrival.required'=> 'Please enter your Data'
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Package();
        $data->location= $request->location;
        $data->pack_des= $request->description;
        $data->resort= $request->resort;
        $data->pack_price= $request->price;
        $data->from_date= $request->fromdate;
        $data->to_date= $request->todate;
        $data->arrival_time= $request->arrival;
        $data->save();
        Session::flash('msg','Data submit successfully');
        // return view('backend/package/add');
        return redirect('package');
    }
    // -----------insert data end----------

    // public function edit($id=null){
    //     $status = Status::all();
    //     $editData = Package::find($id);
    //     return view('backend/crud/edit', compact('editData'),compact('status'));
    // }

     public function edit($id=null){
        $editData = Package::find($id);
        return view('backend/package/edit', compact('editData'));
    }
    public function update(Request $request, $id){
        $rules = [
            'location' => 'required | max:20',
            'description' => 'required | max:50',
            'resort' => 'required | max:30',
            'price' => 'required | max:30',
            'fromdate' => 'required',
            'todate' => 'required',
            'arrival' => 'required',
        ];
        $v_msg=[
            'location.required'=> 'Please enter your location',
            'description.required'=> 'Please enter your description',
            'resort.required'=> 'Please enter your resort name',
            'price.required'=> 'Please enter your price',
            'fromdate.required'=> 'Please enter your Data',
            'todate.required'=> 'Please enter your Data',
            'arrival.required'=> 'Please enter your Data'
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Package::find($id);
        $data->location= $request->location;
        $data->pack_des= $request->description;
        $data->resort= $request->resort;
        $data->pack_price= $request->price;
        $data->from_date= $request->fromdate;
        $data->to_date= $request->todate;
        $data->arrival_time= $request->arrival;
        $data->save();
        Session::flash('msg','Data Update successfully');
        return redirect('package');
    }

    public function delete($id=null){
        $data = Package::find($id);
        $data->delete();
        Session::flash('msg','Data delete successfully');
        return redirect('package');
    }
}
