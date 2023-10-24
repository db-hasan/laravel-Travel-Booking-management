@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="" class="row g-3 p-3">
      @csrf
      <div class="col-md-4">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="">
        @error('location')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-8">
        <label for="inputPassword4" class="form-label">Description</label>
        <input type="text" class="form-control" id="inputPassword4" name="">
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-8">
        <label for="inputAddress" class="form-label">Resort</label>
        <input type="text" class="form-control" id="inputAddress" name="">
        @error('resort')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="inputAddress2" class="form-label">Booking_Price</label>
        <input type="text" class="form-control" id="inputAddress2" name="">
        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="inputAddress2" class="form-label">From Date</label>
        <input type="date" class="form-control" id="inputAddress2" name="">
        @error('fromdate')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="inputAddress2" class="form-label">To Date</label>
        <input type="date" class="form-control" id="inputAddress2" name="">
        @error('todate')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="inputAddress2" class="form-label">Arrival Time</label>
        <input type="time" class="form-control" id="inputAddress2" name="">
        @error('arrival')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection