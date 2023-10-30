<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ExpenseDetails;
use App\Models\Package;
use App\Models\Costtype;
use App\Models\Status;
use Session;

class ExpenseController extends Controller
{
    public function index() {
        $indexExpense = Expense::join('packages', 'expenses.expense_location', '=', 'pack_id')->get(); 
        return view('backend/expense/index', compact('indexExpense'));
    }

    // public function package(){
    //     $indexData= Package::all();    
    //     return view('frontend/package/package', compact('indexData'));
    // }
    
    public function create(){ 
        $indexData['indexPackage']= Package::all();      
        $indexData['indexCosttype']= Costtype::all();            
        $indexData['indexStatus']= Status::all();      
        return view('backend/expense/create', $indexData);
    }
    public function store(Request $request){
        $rules = [
            'expense_location' => 'required | max:20',

            'details_type' => 'required | max:50',
            'details_price' => 'required | max:30',
        ];
        $v_msg=[
            'expense_location.required'=> 'Please select your location',

            'details_type.required'=> 'Please select your type',
            'details_price.required'=> 'Please enter your price',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Expense();
        $data->expense_location= $request->expense_location;
        $data->save();
        $x_id = $data->expense_id;

        // $data= new ExpenseDetails();
        // $data->order_id = $x_id;
        // $data->details_type= $request->details_type;
        // $data->details_price= $request->details_price;
        // $data->save();

        $types= $request->details_type; //name ke dhorse
        $prices= $request->details_price;

       foreach ($types as $index => $type) {
        $data= new ExpenseDetails();
        $data->order_id = $x_id;
        $data->details_type= $type;
        $data->details_price= $prices[$index];
        $data->save();
       }

        Session::flash('msg','Data submit successfully');
        return redirect('admin/expense');
    }

    public function edit($expense_id=null){ 
        $indexData['indexData'] = Expense::find($expense_id);
        $indexData['indexPackage']= Package::all();      
        $indexData['indexCosttype']= Costtype::all();            
        $indexData['indexStatus']= Status::all();      
        return view('backend/expense/edit', $indexData);
    }
    public function update(Request $request, $expense_id){
        $rules = [
            'expense_location' => 'required | max:20',

            'details_type' => 'required | max:50',
            'details_price' => 'required | max:30',
        ];
        $v_msg=[
            'expense_location.required'=> 'Please select your location',

            'details_type.required'=> 'Please select your type',
            'details_price.required'=> 'Please enter your price',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Expense::find($expense_id);
        $data->expense_location= $request->expense_location;
        $data->expense_type= $request->expense_type;
        $data->expense_price= $request->expense_price;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect('admin/expense');
    }
}
