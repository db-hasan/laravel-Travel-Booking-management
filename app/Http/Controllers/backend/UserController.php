<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;
use Session;
use Hash;

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
            'user_email' => 'required|email|unique:users',
            'user_phone' => 'required|unique:users',
            'password' => 'required | min:8 | max:12',
            'role' => 'required',
            'user_img' => 'required | max:255',
        ];
        $v_msg=[
            'name.required'=> 'Please enter name',
            'user_email.required'=> 'Please enter email',
            'user_phone.required'=> 'Please enter your room phone',
            'password.required'=> 'Please enter your password',
            'roll.required'=> 'Please select your roll',
            'user_img.required'=> 'Please enter your image',
        ];
        $this -> validate($request, $rules, $v_msg);
        $imageName = time().'.'. $request->user_img->extension();
        $request->user_img->move(public_path('images'),$imageName);

        $data= new user();
        $data->user_name= $request->name;
        $data->user_email= $request->user_email;
        $data->user_phone= $request->user_phone;
        $data->password= Hash::make($request->password);
        $data->user_role= $request->role;
        $data->user_img= $imageName;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/user');
    }

    public function admin(){
        return view('backend/user/login');
    }

    public function login(Request $request){
        
        $rules = [
            'user_email' => 'required|email',
            'password' => 'required | min:8 | max:12',
        ];
        $v_msg=[
            'user_email.required'=> 'Please enter your email',
            'password.required'=> 'Please enter your password',
        ];
        $this -> validate($request, $rules, $v_msg);
        
        $user= User::where('user_email', '=', $request->user_email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId'. $user->user_id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Password not matches');
            }
        }else{
            return back()->with('fail', 'This email is not registered');
        }
    }
}
