@extends('backend/layouts/layout')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>All Data
                        <a href="{{url('crud')}}" class="btn btn-info float-end">All Data</a>
                    </h4>
                    
                </div>
                <div class="card-body">
                    <label>Name</label>
                    <h4>{{$showData->crud_name}}</h4>
                    <hr>
                    <label>Description</label>
                    <h4>{{$showData->crud_des}}</h4>
                    <hr>
                    <label>Resort</label>
                    <h4>{{$showData->resort}}</h4>
                    <hr>
                    <label>Price</label>
                    <h4>{{$showData->crud_price}}</h4>
                </div>
                <div class="card-footer">
                    <h4>All Data
                        <a href="{{url('crud')}}" class="btn btn-info float-end">Close</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection