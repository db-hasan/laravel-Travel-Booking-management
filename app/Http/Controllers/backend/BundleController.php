<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bundle;
use App\Models\Status;
use Session;

class BundleController extends Controller
{
    // public function index(){
    //     $indexbundle= bundle::all();    
    //     return view('backend/bundle', compact('indexbundle'));
    // }
    
    public function index() {
        $indexbundle = Bundle::join('statuses', 'bundles.bundle_status', '=', 'statuses.id')->orderBy('bundle_id','desc')->get();
        return view('backend/bundle/index', compact('indexbundle'));
    }

    public function create(){
        return view('backend/bundle/create');
    }
    public function store(Request $request){
        
        $rules = [
            'bundle_name' => 'required | max:50',
            'bundle_percentage' => 'required | max:50',
            'room_type' => 'required | max:50',
            'bundle_des' => 'required | max:255',
            'bundle_img' => 'required | max:255',
        ];
        $v_msg=[
            'bundle_name.required'=> 'Please enter Name',
            'bundle_percentage.required'=> 'Please enter percentage',
            'room_type.required'=> 'Please enter your room type',
            'bundle_des.required'=> 'Please enter your describtion',
            'bundle_img.required'=> 'Please enter your image',
        ];
        $this -> validate($request, $rules, $v_msg);
        $imageName = time().'.'. $request->bundle_img->extension();
        $request->bundle_img->move(public_path('images'),$imageName);

        $data= new Bundle();
        $data->bundle_name= $request->bundle_name;
        $data->bundle_percentage= $request->bundle_percentage;
        $data->room_type= $request->room_type;
        $data->bundle_des= $request->bundle_des;
        $data->bundle_img= $imageName;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/bundle');
    }

    public function edit($bundle_id=null){
        $indexData['indexData'] = bundle::find($bundle_id);
        $indexData['indexStatus']= Status::all();      
        return view('backend/bundle/edit', $indexData);
    }
    
    public function update(Request $request, $bundle_id){
        $rules = [
            'bundle_name' => 'required | max:50',
            'bundle_percentage' => 'required | max:50',
            'room_type' => 'required | max:50',
            'bundle_des' => 'required | max:255',
            'bundle_img' => 'required | max:255',
        ];
        $v_msg=[
            'bundle_name.required'=> 'Please enter Name',
            'bundel_percentage.required'=> 'Please enter bundle percentage',
            'room_type.required'=> 'Please enter your room type',
            'bundle_des.required'=> 'Please enter your describtion',
            'bundle_img.required'=> 'Please enter your image',
        ];
        $this -> validate($request, $rules, $v_msg);
        $imageName = time().'.'. $request->bundle_img->extension();
        $request->bundle_img->move(public_path('images'),$imageName);
        
        $data= Bundle::find($bundle_id);
        $data->bundle_name= $request->bundle_name;
        $data->bundle_percentage= $request->bundle_percentage;
        $data->room_type= $request->room_type;
        $data->bundle_des= $request->bundle_des;
        $data->bundle_img= $imageName;
        $data->bundle_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/bundle');
    }

    public function show($bundle_id=null){
        $showData = Bundle::join('statuses', 'bundles.bundle_status', '=', 'statuses.id')->find($bundle_id);
        return view('backend/bundle/show', compact('showData'));
    }

    public function destroy($bundle_id=null){
        $destroyData = Bundle::find($bundle_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect('/admin/bundle');
    }

}
