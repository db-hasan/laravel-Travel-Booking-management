@extends('frontend/layouts/layout')

@section('content')

 <!-- Banner Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Packages</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Packages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- BannerEnd -->

<!-- Process Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Process Start -->  

<!-- Package Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($indexPackage as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('frontend/img/package-1.jpg') }}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->pack_location}}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2">
                                <h6 class="mb-0 ">$ {{$item->pack_price}}</h6>
                            </small>
                        </div>
                        <div class="px-4 py-2">
                            <h5 class="package_title">{{$item->pack_des}} {{$item->resort}}</h5>
                            <p class="text-center">Travel Price Depended to Package. Choose a Package and Enjoy your Vacation </p>
                            <div class="d-flex justify-content-between">
                                <p class="date">From {{$item->from_date}}</p>
                                <p class="date">To Date {{$item->to_date}}</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm text-info" data-bs-toggle="modal" data-bs-target="#editModal">See More</a>
                                <div class="modal fade" id="editModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tour Destination : <strong>New York</strong></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="fs-5"><strong>Tour location : </strong> Takakkaw Falls, Helmcken Falls, Montmorency Falls, Kakabeka Falls, Athabasca Falls, Virginia Falls</p>
                                                <p class="text fs-6"><strong>Resort Name : </strong>Takakkaw Falls, Helmcken Falls, Montmorency Falls, Kakabeka Falls, Athabasca Falls, Virginia Falls</p>
                                                <p class="text"><strong>Facitilies : </strong>Lorem ipsum dolor sit amet consec.</p>
                                                <ul class="amenities">
                                                    <li><span>✓</span> Welcome Drink</li>
                                                    <li><span>✓</span> AC Transport</li>
                                                    <li><span>✓</span> Wi-Fi</li>
                                                    <li><span>✓</span> Newspaper</li>
                                                    <li><span>✓</span> Breakfast</li>
                                                    <li><span>✓</span> Buffet Lunch</li>
                                                    <li><span>✓</span> Buffet Dinner</li>
                                                </ul>
                                                <div class="d-flex justify-content-between pb-3">
                                                    <p class="date"><strong>Tour Start Date : </strong> {{$item->from_date}}</p>
                                                    <p class="date"><strong>Tour End Date : </strong> {{$item->to_date}}</p>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Regular" aria-expanded="false" aria-controls="collapseTwo">
                                                            Regular Package - Deluxe Single Room
                                                        </button>
                                                        </h2>
                                                        <div id="Regular" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Regular Package - Deluxe Single Room, One person can stay this Package.</p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Couple" aria-expanded="false" aria-controls="collapseThree">
                                                            Couple Package - Deluxe Single Room
                                                        </button>
                                                        </h2>
                                                        <div id="Couple" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Couple Package - Deluxe Single Room, Two person can stay this Package. 10% discount on this Package</p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Family" aria-expanded="false" aria-controls="collapseThree">
                                                            Family Package - Deluxe Twin Room
                                                        </button>
                                                        </h2>
                                                        <div id="Family" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Family Package - Deluxe Twin Room, Three/Four person stay a room. Price depends on person Quantity. 12% discount on this package</p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Group" aria-expanded="false" aria-controls="collapseThree">
                                                            Group Package - Deluxe Twin Room
                                                        </button>
                                                        </h2>
                                                        <div id="Group" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Group Package - Deluxe Twin Room, Minmum tow, maxmun four person stay a room. Price depends on person Quantity. 12% discount on this package</p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Business" aria-expanded="false" aria-controls="collapseThree">
                                                            Business Package - Super Deluxe Single Room
                                                        </button>
                                                        </h2>
                                                        <div id="Business" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Business Package - Super Deluxe Single Room, One person stay one room. Price depends on person Quantity. 10% discount applicable when minimum of 5 people or more.</p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('package/'.$item->pack_id)}}" class="btn btn-sm btn-primary" type="submit" style="border-radius: 50px !important;">Choose Package</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach  
            </div>
            
        </div>
    </div>
<!-- Package End -->

<!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Book A Tour</h1>

                        
                        <form method="post" action="{{url('package/store/step1')}}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="location" name="location">
                                            <option value="" selected>Select One</option>
                                            @foreach ($indexPackage as $itemPackage)
                                            <option value="{{$itemPackage->pack_id}}">{{$itemPackage->pack_location}}</option>
                                            @endforeach
                                        </select>
                                        @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <label for="name">Destination</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="bundle" name="bundle">
                                            <option value="" selected>Select One</option>
                                            @foreach ($indexBundle as $itemBundle)
                                            <option value="{{$itemBundle->bundle_id}}">{{$itemBundle->bundle_name}}</option>
                                            @endforeach
                                        </select>
                                            @error('bundle')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        <label for="select1">Package</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="person" name="person" placeholder="Person">
                                        <label for="person">List of Person</label>
                                        <span id="errorak" class="text-danger"></span>
                                        @error('person')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="promo" name="promo">
                                        <label for="promocode">Promo code</label>
                                        @error('promo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>





                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Booking Start -->

<script src="{{asset('backend/js/jquery-3.7.1.min.js') }} "></script>
<script>
  $(document).ready(function() {
      $("#bundle").on("change", function() {
        $('#errorak').text('');
          if ($("#bundle").val() === "1") {
              $('#person').val("1");
              $('#person').on('keyup', function () {
                if ($('#person').val() !== '1') {
                    $('#errorak').text('Enter 1 person');
                  }else{
                    $('#errorak').text('');
                }
              });

          } else if ($("#bundle").val() === "2") {
              $('#person').val("2");
              $('#person').on('keyup', function () {
                if ($('#person').val() !== '2') {
                    $('#errorak').text('Enter 2 person');
                  }else{
                    $('#errorak').text('');
                }
              });

          } else if ($("#bundle").val() === "3") {
              $('#person').val("3");
              $('#person').on('keyup', function () {
                if ($('#person').val() !== '3' && $('#person').val() !== '4') {
                  $('#errorak').text('Enter 3 or 4 person');
                }else{
                  $('#errorak').text('');
                }
              });

          }else if ($("#bundle").val() === "4") {
            $('#person').val("3");
            $('#person').on('keyup', function () {
              if ($('#person').val() !== '3' && $('#person').val() !== '4') {
                $('#errorak').text('Enter 3 or 4 person');
              }else{
                $('#errorak').text('');
              }
            });

          }else if($("#bundle").val() === "5") {
            $('#person').val("");
              $('#person').on('keyup', function () {
                if ($('#person').val() !== '') {
                    $('#errorak').text('');
                  }else{
                    $('#errorak').text('Enter person');
                }
              });

          }else {
              $('#person').val("");
          }
      });
      
  });

  $(document).ready(function() {
    $('#promo').attr('value', 'N/A')
  });

</script>

@endsection
