@extends('backend/layouts/layout')

@section('content')
<div class="container">
    <div class="text-end">
        <a href="{{url('/admin/expense/')}}" class="btn btn-sm btn-dark"><i class="fa-solid fa-eye"></i> View Data</a>
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
            @foreach ($showData as $itemData)
            <tr>
                <td>#</td>
                <td>{{$itemData->pack_location}}</td>
                <td>{{$itemData->costtype_name}}</td>
                <td>{{$itemData->expense_price}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection