@extends('backend/layouts/layout')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>All Data</h4>
                        <div class="text-end">
                            <a href="" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <label>Name:</label>
                    <h6>Data</h6>
                    <hr>
                    <label>Description:</label>
                    <h6>Data</h6>
                    <hr>
                    <label>Resort:</label>
                    <h6>Data</h6>
                    <hr>
                    <label>Price:</label>
                    <h6>Data</h6>
                    <hr>
                    <label>From Data:</label>
                    <h6>Data</h6>
                    <hr>
                    <label>To Data:</label>
                    <h6>Data</h6>
                    <hr>
                    <label>Arrival Time:</label>
                    <h6>Data</h6>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <a href="" class="btn btn-sm btn-dark">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection