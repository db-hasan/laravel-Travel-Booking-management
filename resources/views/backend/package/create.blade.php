@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/package')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('/admin/package/store')}}" class="row g-3 p-3">
      @csrf
      <div class="col-md-4">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" value="{{old('location')}}">
        @error('location')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-8">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-6">
        <label for="resort" class="form-label">Resort</label>
        <input type="text" class="form-control" id="resort" name="resort" value="{{old('resort')}}">
        @error('resort')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-3">
        <label for="price" class="form-label">Booking_Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-3">
        <label for="member" class="form-label">Member</label>
        <input type="text" class="form-control" id="inputAddress2" name="member" value="{{old('member')}}">
        @error('member')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="fromdate" class="form-label">From Date</label>
        <input type="date" class="form-control" id="fromdate" name="fromdate" value="{{old('fromdate')}}">
        @error('fromdate')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="todate" class="form-label">To Date</label>
        <input type="date" class="form-control" id="todate" name="todate" value="{{old('todate')}}">
        @error('todate')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="arrival" class="form-label">Arrival Time</label>
        <input type="time" class="form-control" id="arrival" name="arrival" value="{{old('arrival')}}"> 
        @error('arrival')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection