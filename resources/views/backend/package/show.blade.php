@extends('backend/layouts/layout')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>All Data
                        <a href="{{url('/admin/package')}}" class="btn btn-info float-end">All Data</a>
                    </h4>
                    
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
                    <h4>
                        <a href="{{url('/admin/package')}}" class="btn btn-info float-end">Close</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection