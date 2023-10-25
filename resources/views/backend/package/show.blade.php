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
                            <a href="{{url('/admin/package')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <label>Name:</label>
                    <h6>{{$showData->location}}</h6>
                    <hr>
                    <label>Description:</label>
                    <h6>{{$showData->pack_des}}</h6>
                    <hr>
                    <label>Resort:</label>
                    <h6>{{$showData->resort}}</h6>
                    <hr>
                    <label>Price:</label>
                    <h6>{{$showData->pack_price}}</h6>
                    <hr>
                    <label>From Data:</label>
                    <h6>{{$showData->from_date}}</h6>
                    <hr>
                    <label>To Data:</label>
                    <h6>{{$showData->to_date}}</h6>
                    <hr>
                    <label>Arrival Time:</label>
                    <h6>{{$showData->arrival_time}}</h6>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <a href="{{url('/admin/package')}}" class="btn btn-sm btn-dark">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection