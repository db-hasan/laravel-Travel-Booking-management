@extends('backend/layouts/layout')

@section('content')
<form class="row g-3 p-5">
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Description</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-8">
    <label for="inputAddress" class="form-label">Resort</label>
    <input type="text" class="form-control" id="inputAddress">
  </div>
  <div class="col-4">
    <label for="inputAddress2" class="form-label">Booking_Price</label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

@endsection