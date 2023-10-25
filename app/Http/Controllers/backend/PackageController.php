<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Status;
use Session;

class PackageController extends Controller
{

    public function index() {
        $indexData = Package::join('statuses', 'packages.pack_status', '=', 'statuses.id')->orderBy('pack_id','desc')->get();
        return view('backend/package/index', compact('indexData'));
    }
    
    // -----------insert data start----------
    public function create(){
        return view('backend/package/create');
    }
    public function store(Request $request){
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
        return redirect('admin/package');
    }
    // -----------insert data end----------


    // -----------eidt data start----------
    public function edit($id=null){
        $statusData = Status::all();
        $editData = Package::find($id);
        return view('backend/package/edit', compact('editData'), compact('statusData'));
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
        $data->pack_status= $request->status;
        $data->save();
        Session::flash('msg','Data Update successfully');
        return redirect('/admin/package');
    }
    // -----------edit data end----------

    public function show($id=null){
        $showData = Package::find($id);
        return view('backend/package/show', compact('showData'));
    }

    public function destroy($id=null){
        $data = Package::find($id);
        $data->delete();
        Session::flash('msg','Data delete successfully');
        return redirect('/admin/package');
    }
}
