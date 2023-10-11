@extends('backend/layouts/layout')

@section('content')

<div class="col p-3">
    @include('backend/package/add_package')
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
    <div class="custom-scrollbar">
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
                    <th><span class="d-flex"><a href=""><i class="fa-solid fa-right-left fa-rotate-90 fa-sm"></i></a> Package</span>
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
                <tr>
                    <td>1111</td>
                    <td>Canada</td>
                    <td>300 Mountain Ave</td>
                    <td>The Rimrock</td>
                    <td>Regular</td>
                    <td>$500</td>
                    <td>1/12/2023</td>
                    <td>9/12/2023</td>
                    <td>5:00 AM</td>
                    <td>Active</td>
                    <td class="icons">
                        @include('backend/package/edit_package')
                        <button type="button" class="btn delete" data-bs-toggle="modal" data-bs-target="#deleteModal"><i
                                class="fa-solid fa-trash"></i></button>
                        <div class="modal fade mt-5" id="deleteModal" tabIndex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Package
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="mb-3 text-start">
                                                <label for="exampleInputEmail1" class="form-label">Are
                                                    you Sure
                                                    !</label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection