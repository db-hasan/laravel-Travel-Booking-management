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
<div id="booking">
<form action="" method="post">
    <div class="container-fluid pt-5">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Booking</h6>
            <h1 class="mb-4 title">Booking Now</h1>
        </div>
            <div class="row pb-3 px-5">
                <div class="col-lg-7"> 
                    <div class="">
                        <h4 class="bg-primary text-light p-2 pe-5 text-end">Package Details</h4>
                        <div class="row g-3 px-3 py-3">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form action="" method="post">
                        <ul class="list-group">
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

{{-- <!-- Booking Start -->
        <div class="py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6">
                        <h1 class="text-white mb-4 text-end">Book A Tour</h1>
                        <form action="">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">Date of Birth</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Gender</label>
                                    <div class="d-flex bg-transparent">
                                        <div class="form-check">
                                        <input id="Male" name="paymentMethod" type="radio" class="form-check-input bg-transparent">
                                        <label class="form-check-label pe-4" for="Male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="Female" name="paymentMethod" type="radio" class="form-check-input bg-transparent">
                                        <label class="form-check-label pe-4" for="Female">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="Other" name="paymentMethod" type="radio" class="form-check-input bg-transparent  ">
                                        <label class="form-check-label" for="Other">Other</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">Occupation/Profession</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">Nationality</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">NID</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">Address</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">City</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="text" placeholder="Your Email">
                                        <label for="text">Zip</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
<!-- Booking End --> --}}
@endsection