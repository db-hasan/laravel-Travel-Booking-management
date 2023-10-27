@extends('backend/layouts/layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>All Data</h4>
                        <div class="text-end">
                            <a href="{{url('/admin/booking')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label>Location:</label>
                            <h6>{{$showData->pack_location}}</h6>
                        </div>
                        <div class="col">
                            <label>Description:</label>
                            <h6>{{$showData->pack_des}}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <label>Package:</label>
                            <h6>{{$showData->bundle_name}}</h6>
                        </div>
                        <div class="col-2">
                            <label>Person:</label>
                            <h6>{{$showData->person}}</h6>
                        </div>
                        <div class="col-4">
                            <label>Promo:</label>
                            <h6>{{$showData->promo}}</h6>
                        </div>
                        <div class="col-2">
                            <label>Price:</label>
                            <h6>{{$showData->zip}}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <label>Name:</label>
                            <h6>{{$showData->name}}</h6>
                        </div>
                        <div class="col">
                            <label>Number:</label>
                            <h6>{{$showData->phone}}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <label>Email:</label>
                            <h6>{{$showData->email}}</h6>
                        </div>
                        <div class="col-4">
                            <label>Occupation:</label>
                            <h6>{{$showData->occupation}}</h6>
                        </div>
                        <div class="col-4">
                            <label>Date of Birth:</label>
                            <h6>{{$showData->birth}}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <label>Nationality:</label>
                            <h6>{{$showData->nationality}}</h6>
                        </div>
                        <div class="col-4">
                            <label>NID:</label>
                            <h6>{{$showData->nid}}</h6>
                        </div>
                        
                        <div class="col-4">
                            <label>Gender:</label>
                            <h6>{{$showData->gender}}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <label>Address:</label>
                            <h6>{{$showData->address}}</h6>
                        </div>
                        <div class="col-3">
                            <label>City:</label>
                            <h6>{{$showData->city}}</h6>
                        </div>
                        <div class="col-3">
                            <label>zip:</label>
                            <h6>{{$showData->zip}}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <label>Payment:</label>
                            <h6>{{$showData->ps_name}}</h6>
                        </div>
                        <div class="col">
                            <label>Status:</label>
                            <h6>{{$showData->bs_name}}</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <a href="{{url('/admin/booking')}}" class="btn btn-sm btn-dark">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection