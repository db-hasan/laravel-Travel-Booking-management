<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;
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

}
