@extends('frontend/layouts/layout')

@section('content')
<!-- Banner Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Payment Now</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Payment</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- Banner End -->
<div id="booking">

<form method="post" action="{{url('/payment/store')}}">
@csrf
    <div class="container-fluid pt-3">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Payment</h6>
            <h1 class="mb-4 title">Payment Now</h1>
        </div>
            <div class="row pb-3 px-5">
                <div class="col-md-7"> 
                    <div class="">
                        <h4 class="bg-primary text-light p-2 pe-5 text-end">User Details</h4>
                        <div class="row g-3 px-3 py-3">
                            
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="location" name="location">
                                            <option value="" selected>Select One</option>
                                            @foreach ($indexPackage as $itemPackage)
                                            <option value="{{$itemPackage->pack_id}}" {{$location == $itemPackage->pack_id ? "selected": null}}>{{$itemPackage->pack_location}}</option>
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
                                            <option value="{{$itemBundle->bundle_id}}" {{$bundle == $itemBundle->bundle_id ? "selected": null}}>{{$itemBundle->bundle_name}}</option>
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
                                        <input type="text" class="form-control bg-transparent" id="person" name="person" placeholder="Person" value="{{$person}}">
                                        <label for="person">List of Person</label>
                                        <span id="errorak" class="text-danger"></span>
                                        @error('person')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="promo" name="promo" value="{{$promo}}">
                                        <label for="promocode">Promo code</label>
                                        @error('promo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                      


                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="birth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="Birth" name="birth">
                                    @error('birth')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="" class="form-label">Gender</label>
                                    <div class="d-flex">
                                        <div class="form-check">
                                            <input id="Male" name="gender" type="radio" class="form-check-input">
                                            <label class="form-check-label pe-4" for="Male">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="Female" name="gender" type="radio" class="form-check-input">
                                            <label class="form-check-label" for="Female">Female</label>
                                        </div>
                                    </div>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="Occupation" class="form-label">Occupation/Profession</label>
                                    <input type="text" class="form-control" id="Occupation" name="occupation">
                                </div>

                                <div class="col-md-6">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality">
                                    @error('nationality')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="nid" class="form-label">NID</label>
                                    <input type="text" class="form-control" id="nid" name="nid">
                                    @error('nid')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Bogura">
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-2">
                                    <label for="zip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="5810">
                                    @error('zip')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> 
                                
                                <div class="p-3 me-3">
                                    <button class="btn btn-primary" type="submit" >Book Now</button>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-primary text-end" style="font-size: 25px;">Payment Methods</h1>
                        </div>
                        <img class="img-fluid" src="{{asset('frontend/img/card.png') }}" alt="">
                        <div class="card-body">
                            <div class="form-check">
                                <input id="card" name="paymentMethod" type="radio" class="form-check-input">
                                <label class="form-check-label pb-3 " for="card">Payment via Credit / Debit  card</label>
                            </div>
                            <div class="row g-3 px-3">
                                <div class="col-md-6">
                                    <label for="Firstname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="Firstname">
                                </div>
                                <div class="col-md-6">
                                    <label for="LastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="LastName">
                                </div>
                                <div class="col-md-6">
                                    <label for="cardnumber" class="form-label">Card Number</label>
                                    <input type="text" class="form-control" id="cardnumber" placeholder="123 245 257 1234">
                                </div>
                                <div class="col-md-4">
                                    <label for="Expiration" class="form-label">Expiration</label>
                                    <input type="text" class="form-control" id="Expiration" placeholder="12/2029">
                                </div>
                                <div class="col-md-2">
                                    <label for="CVV" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="CVV" placeholder="587">
                                </div>  
                            </div>
                            <img class="img-fluid" src="{{asset('frontend/img/mobile.png') }}" alt="">
                            <div class="form-check">
                                <input id="Banking" name="paymentMethod" type="radio" class="form-check-input">
                                <label class="form-check-label" for="Banking">Payment via Mobile Banking</label>
                            </div>
                                <div class="card-body row">
                                    <div class="col"></div>
                                    <div class="col d-flex justity-content-end">
                                        <div class="d-flex">
                                            <div class="form-check">
                                            <input id="Bkash" name="Mobile" type="radio" class="form-check-input">
                                            <label class="form-check-label pe-4" for="Bkash">Bkash</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="Nogod" name="Mobile" type="radio" class="form-check-input">
                                            <label class="form-check-label pe-4" for="Nogod">Nogod</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="Roket" name="Mobile" type="radio" class="form-check-input">
                                            <label class="form-check-label" for="Roket">Roket</label>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-check">
                                <input id="cash" name="paymentMethod" type="radio" class="form-check-input">
                                <label class="form-check-label" for="cash">Cash in elivery</label>
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