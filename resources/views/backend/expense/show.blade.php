@extends('backend/layouts/layout')

@section('content')
<div class="container">
    <div class="text-end">
        <a href="{{url('/admin/expense/create')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Package</th>
                <th scope="col">Expense Type</th>
                <th scope="col">Expense Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$showData->expense_id}}</th>
                <td>{{$showData->pack_location}}</td>
                <td>{{$showData->costtype_name}}</td>
                <td>{{$showData->details_price}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection