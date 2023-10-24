@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/package')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('/admin/package/insert')}}" class="row g-3 p-3">
      @csrf
      <div class="col-md-4">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location">
        @error('location')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-8">
        <label for="inputPassword4" class="form-label">Description</label>
        <input type="text" class="form-control" id="inputPassword4" name="description">
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-8">
        <label for="inputAddress" class="form-label">Resort</label>
        <input type="text" class="form-control" id="inputAddress" name="resort">
        @error('resort')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="inputAddress2" class="form-label">Booking_Price</label>
        <input type="text" class="form-control" id="inputAddress2" name="price">
        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="inputAddress2" class="form-label">From Date</label>
        <input type="date" class="form-control" id="inputAddress2" name="fromdate">
        @error('fromdate')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="inputAddress2" class="form-label">To Date</label>
        <input type="date" class="form-control" id="inputAddress2" name="todate">
        @error('todate')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="inputAddress2" class="form-label">Arrival Time</label>
        <input type="time" class="form-control" id="inputAddress2" name="arrival">
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