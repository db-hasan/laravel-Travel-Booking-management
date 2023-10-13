@extends('backend/layouts/layout')

@section('content')
<div class="p-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{url('crud')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('crud/insert')}}" class="row g-3 p-3">
      @csrf
      <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-12">
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
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection