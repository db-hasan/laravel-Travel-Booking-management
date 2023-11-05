<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;
use Session;

class UserController extends Controller
{

    public function index() {
        $indexUser = User::join('statuses', 'users.user_status', '=', 'statuses.id')
                        ->join('roles', 'users.user_role', '=', 'role_id')->get();
        return view('backend/user/index', compact('indexUser'));
    }

     public function create(){
        $indexData['indexRole']= Role::all();
        return view('backend/user/create', $indexData);
    }

    public function store(Request $request){
        
        $rules = [
            'name' => 'required | max:50',
            'email' => 'required ',
            'phone' => 'required | max:50',
            'username' => 'required | max:255',
            'password' => 'required | min:8 | max:12',
            'role' => 'required',
            'user_img' => 'required | max:255',
        ];
        $v_msg=[
            'name.required'=> 'Please enter name',
            'email.required'=> 'Please enter email',
            'phone.required'=> 'Please enter your room phone',
            'username.required'=> 'Please enter your username',
            'password.required'=> 'Please enter your password',
            'roll.required'=> 'Please select your roll',
            'user_img.required'=> 'Please enter your image',
        ];
        $this -> validate($request, $rules, $v_msg);
        $imageName = time().'.'. $request->user_img->extension();
        $request->user_img->move(public_path('images'),$imageName);

        $data= new user();
        $data->user_name= $request->name;
        $data->user_email= $request->email;
        $data->user_phone= $request->phone;
        $data->username= $request->username;
        $data->password= $request->password;
        $data->user_role= $request->role;
        $data->user_img= $imageName;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/user');
    }
}
