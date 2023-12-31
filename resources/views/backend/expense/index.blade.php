
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{url('/admin/expense/create')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th><span class="">ID</span></th>
                    <th><span class="pe-5">Package</span></th>
                    <th><span class="pe-5">Total Expense Price</span></th>
                    <th><strong class="ps-5">Action</strong></th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($indexPackage as $itemPackage)
                <tr>
                    <td>{{$itemPackage->pack_id}}</td>
                    <td>{{$itemPackage->pack_location}}</td>
                    <td>{{$itemPackage->expense_price}}</td>
                    
                    {{-- @foreach ($indexExpense as $itemExpense)
                    <?php
                        $total=($itemExpense->expense_price);
                    ?>
                    <td>{{$total}}</td> 
                    
                    @endforeach --}}
                     
                    <td class="icons">
                        <a href="{{url('expense/show/'.$itemPackage->pack_id)}}" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('expense/edit/'.$itemPackage->pack_id)}}" type="button"  class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{url('expense/destroy/'.$itemPackage->pack_id)}}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr> 
                @endforeach   
            </tbody>
        </table>
    </div>
</div>

<script src="{{asset('backend/js/jquery-3.7.1.min.js') }} "></script>
<script src="{{asset('backend/js/dataTables.js') }} "></script>
@endsection