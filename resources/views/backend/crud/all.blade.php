@extends('backend/layouts/layout')

@section('content')
<div class="col p-3">
    @if(Session::has('msg'))
      <p class="alert alert-success">{{Session::get('msg')}}</p>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{url('crud/add')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class='row'>
        <div class='col'>
            <h3>Manage Location</h3>
        </div>
        <div class='col text-end icons  pb-2'>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-success">View</button>
                <button type="button" class="btn btn-warning">Print</button>
            </div>
        </div>
    </div>
    <div class='row show_search'>
        <div class="col">
            <span class='m-2'>Show </span>
            <select class='px-3' name="" id="">
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50</option>
                <option value="">100</option>
            </select>
            <span class='m-2'> Entries</span>
        </div>
        <div class="col">
            <div class="input-group ">
                <input type="text" class="form-control" placeholder="Type here" aria-label="Recipient's username"
                    aria-describedby="basic-addon2" />
                <span class="input-group-text" id="basic-addon2">Search</span>
            </div>
        </div>
    </div>
    <div class="custom-scrollbar">
        <table class="table">
            <thead>
                <tr>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> ID</span></th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Name</span>
                    </th>
                    <th><span class="d-flex pe-5"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Description</span>
                    </th>
                    <th><span class="d-flex pe-5"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Resort</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Booking_Price</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Status</span>
                    </th>
                    <th><strong class="ps-5">Action</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexData as $item)
                <tr>
                    <td>{{$item->crud_id}}</td>
                    <td>{{$item->crud_name}}</td>
                    <td>{{$item->crud_des}}</td>
                    <td>{{$item->resort}}</td>
                    <td>{{$item->crud_price}}</td>
                    <td>{{$item->curd_status}}</td>
                    <td class="icons">
                       {{-- <span><a href="{{url('crud/show')}}" class="btn btn-info px-3">View</a></span> --}}
                       <span><a href="{{url('crud/show/'.$item->crud_id)}}" class="btn btn-info px-3">View</a></span>
                       <span><a href="{{url('crud/edit/'.$item->crud_id)}}" class="btn btn-success px-3">Edit</a></span>
                       <span><a href="{{url('crud/delete/'.$item->crud_id)}}" onclick="return confirm('Are you sure dalete')" class="btn btn-danger">Delete</a></span>
                    </td>
                </tr>
                @endforeach          
            </tbody>
        </table>
    </div>
</div>

@endsection