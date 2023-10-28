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
                            <a href="{{url('/admin/promo')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label>Promo Code:</label>
                            <h6>{{$showData->promo_code}}</h6>
                        </div>
                        <div class="col">
                            <label>Discount:</label>
                            <h6>{{$showData->promo_percentage}}%</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <label>Description:</label>
                            <h6>{{$showData->promo_des}}</h6>
                        </div>
                        <div class="col-2">
                            <label>Status:</label>
                            <h6>{{$showData->status_name}}</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <a href="{{url('/admin/promo')}}" class="btn btn-sm btn-dark">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection