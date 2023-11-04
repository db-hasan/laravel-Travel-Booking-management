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
    
    public function index($pack_id=null){
        // $indexData['indexExpense']= Expense::where('ex_package', $pack_id)->get();
        $indexData['indexPackage']= Package::all();      
        return view('backend/expense/index', $indexData);
    }

    public function show($pack_id=null){
        $Data['showData'] = Expense::join('packages', 'expenses.ex_package','=','pack_id')
                                    ->join('costtypes', 'expenses.expense_type','=','costtype_id')
                                    ->where('ex_package',$pack_id)->get();

      return view('backend/expense/show', $Data);
    }


    public function create(){
        $indexData['indexPackage']= Package::all();   
        $indexData['indexCosttype']= Costtype::all();   
        return view('backend/expense/create', $indexData);
    }

        public function store(Request $request){
        $rules = [
            'ex_package' => 'required | max:20',
            'expense_type' => 'required | max:50',
            'expense_price' => 'required | max:30',
        ];
        $v_msg=[
            'ex_package.required'=> 'Please select your location',
            'expense_type.required'=> 'Please select your type',
            'expense_price.required'=> 'Please enter your price',
        ];
        $this -> validate($request, $rules, $v_msg);

        $types = $request->expense_type;

        foreach($types as $index => $type){
        $data= new Expense();
        $data->ex_package= $request->ex_package;
        $data->expense_type= $type;
        $data->expense_price= $request->expense_price[$index];
        $data->save();
        }

        Session::flash('msg','Data submit successfully');
        return redirect('admin/expense');
    }

    // public function show($pack_id=null){
    //     $Data['showData'] = Expense::join('packages', 'expenses.ex_package','=','pack_id')
    //                                 ->join('costtypes', 'expenses.expense_type','=','costtype_id')
    //                                 ->where('ex_package',$pack_id)->get();

    //   return view('backend/expense/show', $Data);
    // }
    
}
