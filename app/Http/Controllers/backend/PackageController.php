<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Booking;
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
            'member' => 'required | max:30',
            'fromdate' => 'required',
            'todate' => 'required',
            'arrival' => 'required',
            'pack_img' => 'required',
        ];
        $v_msg=[
            'location.required'=> 'Please enter your location',
            'description.required'=> 'Please enter your description',
            'resort.required'=> 'Please enter your resort name',
            'price.required'=> 'Please enter your price',
            'member.required'=> 'Please enter your member',
            'fromdate.required'=> 'Please enter your Data',
            'todate.required'=> 'Please enter your Data',
            'arrival.required'=> 'Please enter your Data'
            // 'pack_img.required'=> 'Please enter your Data'
        ];
        $this -> validate($request, $rules, $v_msg);

        $imageName = time().'.'. $request->pack_img->extension();
        $request->pack_img->move(public_path('images'),$imageName);

        $data= new Package();
        $data->pack_location= $request->location;
        $data->pack_des= $request->description;
        $data->resort= $request->resort;
        $data->pack_price= $request->price;
        $data->member= $request->member;
        $data->from_date= $request->fromdate;
        $data->to_date= $request->todate;
        $data->arrival_time= $request->arrival;
        $data->pack_img= $imageName;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/package');
    }
    // -----------insert data end----------


    // -----------eidt data start----------
    public function edit($pack_id=null){
        $statusData = Status::all();
        $editData = Package::find($pack_id);
        return view('backend/package/edit', compact('editData'), compact('statusData'));
    }
    public function update(Request $request, $pack_id){
        $rules = [
            'location' => 'required | max:20',
            'description' => 'required | max:50',
            'resort' => 'required | max:30',
            'price' => 'required | max:30',
            'member' => 'required | max:30',
            'fromdate' => 'required',
            'todate' => 'required',
            'arrival' => 'required',
            'pack_img' => 'required',
        ];
        $v_msg=[
            'location.required'=> 'Please enter your location',
            'description.required'=> 'Please enter your description',
            'resort.required'=> 'Please enter your resort name',
            'price.required'=> 'Please enter your price',
            'member.required'=> 'Please enter your member',
            'fromdate.required'=> 'Please enter your Data',
            'todate.required'=> 'Please enter your Data',
            'pack_img.required'=> 'Please enter your Data'
        ];
        $this -> validate($request, $rules, $v_msg);

        $imageName = time().'.'. $request->pack_img->extension();
        $request->pack_img->move(public_path('images'),$imageName);

        $data= Package::find($pack_id);
        $data->pack_location= $request->location;
        $data->pack_des= $request->description;
        $data->resort= $request->resort;
        $data->pack_price= $request->price;
        $data->member= $request->member;
        $data->from_date= $request->fromdate;
        $data->to_date= $request->todate;
        $data->arrival_time= $request->arrival;
        $data->pack_img= $imageName;
        $data->pack_status= $request->status;
        $data->save();
        Session::flash('msg','Data Update successfully');
        return redirect('/admin/package');
    }
    // -----------edit data end----------

    public function show($pack_id=null){
        $showData = Package::find($pack_id);
        return view('backend/package/show', compact('showData'));
    }

    public function destroy($pack_id=null){
        $data = Package::find($pack_id);
        $data->delete();
        Session::flash('msg','Data delete successfully');
        return redirect('/admin/package');
    }
}
