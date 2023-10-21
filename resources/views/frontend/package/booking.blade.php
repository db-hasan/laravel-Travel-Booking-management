@extends('frontend/layouts/layout')

@section('content')
<!-- Banner Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Booking Now</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Banner End -->

<div id="checkout">
<form action="" method="post">
    <div class="container-fluid pt-1">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Package</h6>
                <h1 class="mb-5">Chose Package</h1>
            </div>
        <div>
            <div class="row">
                <div class="col-lg-4 ps-3">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Canada</h6>
                                    <small class="text-body-secondary">Resort Name</small>
                                </div>
                                <span class="text-body-secondary"><Strong>$20</Strong></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Package</h6>
                                    <small class="text-body-secondary">Deluxe Single Room</small>
                                </div>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>select one</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">List of Person</h6>
                                    <small class="text-body-secondary">Depended Package</small>
                                </div>
                                <input type="text" class="form-control text-end" placeholder="2">
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (USD)</span>
                                <strong>$35</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>Brief description</small>
                                </div>
                                <input type="text" class="form-control text-end" placeholder="-$5">
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <h6 class="my-0">Total (USD)</h6>
                                <strong>$30</strong>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-end">
                            <div class="p-2 ">
                                <button type="button" class="btn btn-danger">
                                    <a href="{{url('/package')}}" class="text-decoration-none text-light">Close</a>
                                </button>
                            </div>
                            <div class="p-2 me-3">
                                <button class="btn btn-primary" type="submit" >Book Now</button>
                            </div>
                        </div>
                </div>
                <div class="col-lg-8 px-4 pb-4"> 
                    <div class="bg-light">
                        <h4 class="bg-primary text-light rounded p-2 pe-5 text-end">Package Details</h4>
                        <div class="custom-scrollbar">
                            @foreach ($indexData as $item)
                            <div class="card mb-3 mx-4" >
                                <div class="row g-0">
                                    <div class="col-md-4 rounded">
                                        <img src="{{asset('frontend/img/single.jpg') }}" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-title">{{$item->bundle_name}}</h5>
                                            <h6 class="date text-info">{{$item->room_type}}</h6>
                                        </div>
                                        <p class="card-text">{{$item->person}}</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            @endforeach  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end bg-light">
        <div class="p-3 ">
            <button type="button" class="btn btn-danger">
                <a href="{{url('/package')}}" class="text-decoration-none text-light">Close</a>
            </button>
        </div>
        <div class="p-3 me-3">
            <button class="btn btn-primary" type="submit" >Book Now</button>
        </div>
    </div>
</form>
</div>
@endsection