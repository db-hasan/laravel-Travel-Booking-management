@extends('frontend/layouts/layout')

@section('content')
<section id="banner">
    <div class="overlay">
        <div class="container">
            <div class="text-light text-center">
                <h1 class="">Enjoy Your Vacation With Us</h1>
                <p class="">Non Profit Student Organization for Skill Development</p>
            </div>
        </div>
    </div>
</section>
<!-- facilities Start -->
<section class="container-xxl p-5" id='facilities'>
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Facilities</h6>
            <h1 class="mb-5 title">Our Facilities</h1>
        </div>
        <div class="row g-4">
            <div class="col-sm-6 col-lg-3 ">
                <div class="card  h-100 ">
                    <div class="facilities-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>WorldWide Tours</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class=" card h-100">
                    <div class="facilities-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="facilities-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="facilities-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Event Management</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum at elitr sed ipsujusto dolor sed clita amet diam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- facilities End -->

<!-- Packages Start -->
<div class="container-xxl p-5" id="packages">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Packages</h6>
            <h1 class="mb-4 title">Our Packages</h1>
        </div>
        <div class="row  g-4">
            @foreach ($indexData as $item)
            <div class="col-md-6 col-lg-4 ">
                <div class="card  h-100 package">
                
                    <img src="{{asset('frontend/images/img3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->location}}
                            <strong class="float-end">${{$item->pack_price}}</strong>
                        </h5>
                        <div class="row">
                            <p>{{$item->pack_des}}</p>
                        </div>
                        <div class="row">
                            <p class="col package-item">
                                <span class="explore-price-box">
                                    From
                                    <strong class="explore-date">{{$item->from_date}}</strong>
                                </span>
                            </p>
                            <p class="col package-item last">
                                <span class="explore-price-box">
                                    To Date
                                    <strong class="explore-date">{{$item->to_date}}</strong>
                                </span>
                            </p>
                        </div>
                        <p class="text">Travel Price Depended to Package. Please Choose a Package Before
                            <strong class="booking-date">09/08/2023</strong>
                            and Enjoy Your Vacation <strong class="bg-light text-info px-3 rounded">See More</strong>
                        </p>
                        <hr>
                        <div class="row">
                            <a class="col package-status open">Open Now</a>
                            <a href="{{url('add_pack')}}" class="col Chose-package ">Choose Package</a>
                        </div>
                    
                    </div>
                </div>
            </div>
            @endforeach  
        </div>
    </div>
</div> 
<!-- Packages End -->



<!-- Contact Start -->
<div class="container-xxl p-5">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Services</h6>
            <h1 class="mb-4 title">Contact For Any Query</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5>Get In Touch</h5>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos</p>
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                        style="width: 50px; height: 50px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Office</h5>
                        <p class="mb-0">5810 Bogura, Bangladesh</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                        style="width: 50px; height: 50px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Mobile</h5>
                        <p class="mb-0">+880 1723629080</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                        style="width: 50px; height: 50px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Email</h5>
                        <p class="mb-0">info@helpsx.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
