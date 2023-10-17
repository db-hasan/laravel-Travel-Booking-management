<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Crud;
use App\Models\Status;
use Session;

class CrudController extends Controller
{

// ------------view with join data start----------
   public function all() {
    $indexData = Crud::join('statuses', 'cruds.crud_status', '=', 'statuses.id')->orderBy('crud_id','desc')->get();
    return view('backend/crud/all', compact('indexData'));
}

// public function all(){
    //         $indexData= Crud::all();    
    //         return view('backend/crud/all', compact('indexData'));
    //     }
// ------------view data end----------
    
// ------------add data start----------
    public function add(){
        return view('backend/crud/add');
    }
    public function insert(Request $request){
        $rules = [
            'name' => 'required | max:20',
            'description' => 'required | max:50',
            'resort' => 'required | max:30',
            'price' => 'required',
        ];
        $v_msg=[
            'name.required'=> 'Please enter your name',
            'description.required'=> 'Please enter your description',
            'resort.required'=> 'Please enter your resort name',
            'price.required'=> 'Please enter your price'
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Crud();
        $data->crud_name= $request->name;
        $data->crud_des= $request->description;
        $data->resort= $request->resort;
        $data->crud_price= $request->price;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('crud');
    }
// ------------add data end----------

    public function show($id=null){
        $showData = Crud::find($id);
        return view('backend/crud/show', compact('showData'));
    }
// ------------edit data end----------

    public function edit($id=null){
        $status = status::all();
        $editData = Crud::find($id);
        return view('backend/crud/edit', compact('editData'),compact('status'));
    }
    public function update(Request $request, $id){
        $rules = [
            'name' => 'required | max:20',
            'description' => 'required | max:50',
            'resort' => 'required | max:30',
            'price' => 'required',
        ];
        $v_msg=[
            'name.required'=> 'Please enter your name',
            'description.required'=> 'Please enter your description',
            'resort.required'=> 'Please enter your resort name',
            'price.required'=> 'Please enter your price'
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Crud::find($id);
        $data->crud_name= $request->name;
        $data->crud_des= $request->description;
        $data->resort= $request->resort;
        $data->crud_price= $request->price;
        $data->crud_status= $request->status;
        $data->save();
        Session::flash('msg','Data update successfully');
        return redirect('crud');
    }

    public function delete($id=null){
        $data = Crud::find($id);
        $data->delete();
        Session::flash('msg','Data delete successfully');
        return redirect('crud');
    }
}
// ------------edit data end----------
