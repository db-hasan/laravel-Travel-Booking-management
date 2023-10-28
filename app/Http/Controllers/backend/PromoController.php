<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Status;
use Session;

class PromoController extends Controller
{
    // public function index(){
    //     $indexPromo= Promo::all();    
    //     return view('backend/promo', compact('indexPromo'));
    // }
    
    public function index() {
        $indexPromo = Promo::join('statuses', 'Promos.promo_status', '=', 'statuses.id')->orderBy('promo_id','desc')->get();
        return view('backend/promo/index', compact('indexPromo'));
    }

    public function create(){
        return view('backend/promo/create');
    }
    public function store(Request $request){
        $rules = [
            'promo_code' => 'required | max:50',
            'promo_des' => 'required | max:255',
            'promo_percentage' => 'required | max:50',
        ];
        $v_msg=[
            'promo_code.required'=> 'Please enter promo code',
            'promo_des.required'=> 'Please enter promo description',
            'promo_percentage.required'=> 'Please enter your promo percentage',
        ];
        $this -> validate($request, $rules, $v_msg);
        $data= new Promo();
        $data->promo_code= $request->promo_code;
        $data->promo_des= $request->promo_des;
        $data->promo_percentage= $request->promo_percentage;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/promo');
    }

    public function edit($promo_id=null){
        $indexData['indexData'] = Promo::find($promo_id);
        $indexData['indexStatus']= Status::all();      
        return view('backend/promo/edit', $indexData);
    }
    
    public function update(Request $request, $promo_id){
        $rules = [
            'promo_code' => 'required | max:50',
            'promo_des' => 'required | max:255',
            'promo_percentage' => 'required | max:50',
        ];
        $v_msg=[
            'promo_code.required'=> 'Please enter promo code',
            'promo_des.required'=> 'Please enter promo description',
            'promo_percentage.required'=> 'Please enter your promo percentage',
        ];
        $this -> validate($request, $rules, $v_msg);
        $data= Promo::find($promo_id);
        $data->promo_code= $request->promo_code;
        $data->promo_des= $request->promo_des;
        $data->promo_percentage= $request->promo_percentage;
        $data->promo_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/promo');
    }

    public function show($promo_id=null){
        $showData = Promo::join('statuses', 'Promos.promo_status', '=', 'statuses.id')->find($promo_id);
        return view('backend/promo/show', compact('showData'));
    }

    public function destroy($promo_id=null){
        $destroyData = Promo::find($promo_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect('/admin/promo');
    }

}
