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
            <h6 class="section-title bg-white text-center px-3">Booking</h6>
            <h1 class="mb-4 title">Booking Now</h1>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-8 px-5 px-3 "> 
                    <form action="" method="post">
                        <div class="row g-3 px-3">
                                <h4 class="bg-primary-subtle p-2">Enter Your Details</h4>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Birth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="Birth" placeholder="" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="" class="form-label">Gender</label>
                                    <div class="d-flex">
                                        <div class="form-check">
                                        <input id="Male" name="paymentMethod" type="radio" class="form-check-input">
                                        <label class="form-check-label pe-4" for="Male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="Female" name="paymentMethod" type="radio" class="form-check-input">
                                        <label class="form-check-label pe-4" for="Female">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="Other" name="paymentMethod" type="radio" class="form-check-input">
                                        <label class="form-check-label" for="Other">Other</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="Occupation" class="form-label">Occupation/Profession</label>
                                    <input type="text" class="form-control" id="Occupation" placeholder="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Nationality" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" id="Nationality" placeholder="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="NID" class="form-label">NID</label>
                                    <input type="text" class="form-control" id="NID" placeholder="" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="Address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="Address" placeholder="1234 Main St">
                                </div>
                                <div class="col-md-4">
                                    <label for="City" class="form-label">City</label>
                                    <input type="text" class="form-control" id="City" placeholder="Bogura">
                                </div>
                                <div class="col-md-2">
                                    <label for="Zip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="Zip" placeholder="5810">
                                </div>  
                                
                                <div class="col-md-12 py-2">
                                    <button class="btn mb-3 singbutton" type="submit">Checkout with Continue</button>
                                </div>
                        </div>
                    </form>
                </div>
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
                                    <small class="text-body-secondary">Single/Share Room</small>
                                </div>
                                <span class="text-body-secondary">Regular</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">List of Person</h6>
                                    <small class="text-body-secondary">Price depends on person Quantity</small>
                                </div>
                                <span class="text-body-secondary">5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>Brief description</small>
                                </div>
                                <span class="text-success">−$5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (USD)</span>
                                <strong>$20</strong>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end bg-success-subtle Checkout">
        <div class="p-3">
            <button type="button" class="btn btn-outline-danger">Close</button>
        </div>
        <div class="p-3 me-3">
            <button type="button" class="btn btn-outline-success">
                <a href="/invoice" class="text-decoration-none">Booking</a>
            </button>
        </div>
    </div>
</form>
</div>
@endsection