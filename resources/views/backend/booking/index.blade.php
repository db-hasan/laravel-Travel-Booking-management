
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{url('/admin/booking/create')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class='row'>
        <div class='col'>
            <h3>Manage Booking</h3>
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
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Package</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Person</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Promo</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Price</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Name</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Number</span>
                    </th>
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Status</span>
                    </th>
                    <th><strong class="ps-5">Action</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Business</td>
                    <td>7</td>
                    <td>#Save50</td>
                    <td>1200</td>
                    <td>Mim Hasan</td>
                    <td>01723629080</td>   
                    <td>Active</td>   
                    <td class="icons">
                        <a href="" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="" type="button"  class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>    
            </tbody>
        </table>
    </div>
</div>

@endsection