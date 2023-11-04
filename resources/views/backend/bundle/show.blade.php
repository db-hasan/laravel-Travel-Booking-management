@extends('backend/layouts/layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>All Data</h4>
                        <div class="text-end">
                            <a href="{{url('/admin/bundle')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-4">
                            <label>Bundle Name:</label>
                            <h6>{{$showData->bundle_name}}</h6>
                        </div>
                        <div class="col-md-5">
                            <label>Room type:</label>
                            <h6>{{$showData->room_type}}</h6>
                        </div>
                        <div class="col-md-3">
                            <label>Discount:</label>
                            <h6>{{$showData->bundle_percentage}}%</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Description:</label>
                            <h6>{{$showData->bundle_des}}</h6>
                        </div>

                        <div class="col-md-3">
                            <label>Status:</label>
                            <h6>{{$showData->status_name}}</h6>
                        </div>

                        <div class="col-md-5">
                            <h6>
                                <img src="/images/{{$showData->bundle_img}}" alt="Image notefound" style="height: 100px;">
                            </h6>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <a href="{{url('/admin/bundle')}}" class="btn btn-sm btn-dark">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection