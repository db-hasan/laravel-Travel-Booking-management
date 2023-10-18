@extends('frontend/layouts/layout')

@section('content')
<section id="booking-banner">
    <div class="banner-overlay">
        <div class="text-light banner-title">
            <h1 class="">Please Make Sure Payment</h1>
        </div>
    </div>
</section>
<div id="checkout">
<form action="" method="post">
    <div class="container-fluid pt-5">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Package</h6>
            <h1 class="mb-4 title">Chose Package</h1>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-4 ps-3 checkout">
                    <form action="" method="post">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">location</h6>
                                    <small class="text-body-secondary">Resort Name</small>
                                </div>
                                <span class="text-body-secondary">Canada</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Package</h6>
                                    <small class="text-body-secondary">Room: Single / Sharing</small>
                                </div>
                                <select class="form-select">
                                    <option value="">Regular</option>
                                    <option value="">Cupale</option>
                                    <option value="">Business</option>
                                </select>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">List of Person</h6>
                                    <small class="text-body-secondary">Person depends Package</small>
                                </div>
                                <input type="text" class="form-control" placeholder="">
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>Brief description</small>
                                </div>
                                <input type="text" class="form-control" placeholder="−$5">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-lg-8 px-4 p"> 
                    <div class="bg-secondary-subtle rounded">
                        <h4 class="bg-primary-subtle rounded p-2 pe-5 text-end">Package Details</h4>
                        <div class="custom-scrollbar">
                            <div class="card mb-3 mx-4" >
                                <div class="row g-0">
                                    <div class="col-md-4 rounded">
                                        <img src="{{asset('frontend/images/single.jpg') }}" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Regular Package
                                            <span class="text-info float-end">Single Room</span>
                                        </h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Price depends on person Quantity</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 mx-4" >
                                <div class="row g-0">
                                    <div class="col-md-4 rounded">
                                        <img src="{{asset('frontend/images/single.jpg') }}" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Regular Package
                                            <span class="text-info float-end">Single Room</span>
                                        </h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Price depends on person Quantity</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 mx-4" >
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/images/single.jpg') }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Regular Package
                                            <span class="text-info float-end">Single Room</span>
                                        </h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Price depends on person Quantity</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 mx-4" >
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/images/single.jpg') }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Regular Package
                                            <span class="text-info float-end">Single Room</span>
                                        </h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Price depends on person Quantity</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end bg-success-subtle Checkout">
        <div class="p-3">
            <button type="button" class="btn btn-outline-danger">Close</button>
        </div>
        <div class="p-3 me-3">
            <button type="button" class="btn btn-outline-success"><a class="text-decoration-none"
                    href="">Add Package</a></button>
        </div>
    </div>
</form>
</div>
@endsection