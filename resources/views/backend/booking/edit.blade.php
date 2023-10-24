@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/booking')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="" class="row g-3 p-3">
      @csrf
      
      <div class="col-md-4">
        <label for="location" class="form-label">location</label>
        <select class="form-select" aria-label="Default select example" id="location">
          <option selected>select one</option>
          <option>select one</option>
        </select>
        @error('location')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="Package" class="form-label">Package</label>
        <select class="form-select" aria-label="Default select example" id="Package">
          <option selected>select one</option>
          <option>select one</option>
        </select>
        @error('Package')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="Person" class="form-label">Person</label>
        <input type="text" class="form-control" id="Person" name="">
        @error('Person')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="Promo" class="form-label">Promo</label>
        <input type="text" class="form-control" id="Promo" name="">
        @error('Promo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="">
        @error('phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="" class="form-label">Gender</label>
        <div class="d-flex">
          <div class="form-check">
            <input id="Male" name="Gender" type="radio" class="form-check-input">
            <label class="form-check-label pe-4" for="Male">Male</label>
          </div>
          <div class="form-check">
            <input id="Female" name="Gender" type="radio" class="form-check-input">
            <label class="form-check-label" for="Female">Female</label>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <label for="birth" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="birth" name="">
        @error('birth')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="occupation" class="form-label">Occupation</label>
        <input type="text" class="form-control" id="occupation" name="">
        @error('occupation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6">
        <label for="nationality" class="form-label">Nationality</label>
        <input type="text" class="form-control" id="nationality" name="">
        @error('nationality')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6">
        <label for="nid" class="form-label">NID</label>
        <input type="text" class="form-control" id="inputAddress2" name="">
        @error('nid')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="">
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="">
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="zip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="zip" name="">
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection