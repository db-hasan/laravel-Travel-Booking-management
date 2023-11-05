<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Session;

class ContactController extends Controller
{
    public function contact(){    
        return view('frontend/contact'); 
    }

    public function store(Request $request){
        
        $rules = [
            'con_name' => 'required | max:50',
            'con_email' => 'required | max:50',
            'con_subject' => 'required | max:50',
            'con_message' => 'required | max:255',
        ];
        $v_msg=[
            'con_name.required'=> 'Please enter Name',
            'con_email.required'=> 'Please enter Email',
            'con_subject.required'=> 'Please enter your Subject',
            'con_message.required'=> 'Please enter your Message',
        ];
        $this -> validate($request, $rules, $v_msg);
        $data= new Contact();
        $data->con_name= $request->con_name;
        $data->con_email= $request->con_email;
        $data->con_subject= $request->con_subject;
        $data->con_message= $request->con_message;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return view('frontend/contact');
    }

    public function index(){
        $indexContact= Contact::all();    
        return view('backend/contact/index', compact('indexContact'));
    }

    public function destroy($con_id=null){
        $destroyData = Contact::find($con_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect('/contact/index');
    }


    
}
