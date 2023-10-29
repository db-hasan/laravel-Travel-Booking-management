<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Package;
use App\Models\Costtype;
use App\Models\Status;
use Session;

class ExpenseController extends Controller
{
    public function index() {
        $indexExpense = Expense::join('packages', 'expenses.expense_location', '=', 'pack_id')
                                ->join('costtypes', 'expenses.expense_type', '=', 'costtype_id')
                                ->join('statuses', 'expenses.expense_status', '=', 'id')->get();
        return view('backend/expense/index', compact('indexExpense'));
    }
    
    public function create(){ 
        $indexData['indexPackage']= Package::all();      
        $indexData['indexCosttype']= Costtype::all();            
        $indexData['indexStatus']= Status::all();      
        return view('backend/expense/create', $indexData);
    }
    public function store(Request $request){
        $rules = [
            'expense_location' => 'required | max:20',
            'expense_type' => 'required | max:50',
            'expense_price' => 'required | max:30',
        ];
        $v_msg=[
            'expense_location.required'=> 'Please select your location',
            'expense_type.required'=> 'Please select your type',
            'expense_price.required'=> 'Please enter your price',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Expense();
        $data->expense_location= $request->expense_location;
        $data->expense_type= $request->expense_type;
        $data->expense_price= $request->expense_price;
        $data->save();
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
            'expense_type' => 'required | max:50',
            'expense_price' => 'required | max:30',
        ];
        $v_msg=[
            'expense_location.required'=> 'Please select your location',
            'expense_type.required'=> 'Please select your type',
            'expense_price.required'=> 'Please enter your price',
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
