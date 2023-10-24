
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{url('/admin/package/create')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class='row'>
        <div class='col'>
            <h3>Manage Package</h3>
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
    <div class="custom-scrollbar-table">
        <table class="table">
            <thead>
                <tr>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> ID</span></th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Location</span>
                    </th>
                    <th><span class="d-flex pe-5"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Description</span>
                    </th>
                    <th><span class="d-flex pe-5"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Resort</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Price</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> From_Date</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> To_Date</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Arrival_Time</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Status</span>
                    </th>
                    <th><strong class="ps-5">Action</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexData as $item)
                <tr>
                    <td>{{$item->pack_id}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->pack_des}}</td>
                    <td>{{$item->resort}}</td>
                    <td>{{$item->pack_price}}</td>
                    <td>{{$item->from_date}}</td>
                    <td>{{$item->to_date}}</td>
                    <td>{{$item->arrival_time}}</td>   
                    <td>{{$item->status_name}}</td>   
                    <td class="icons">
                        <a href="{{url('package/show/'.$item->pack_id)}}" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('package/edit/'.$item->pack_id)}}" type="button"  class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{url('package/destroy/'.$item->pack_id)}}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                 @endforeach     
            </tbody>
        </table>
         <h1 class="py-5"></h1>
    </div>
</div>

@endsection