@extends('backend/layouts/layout')

@section('content')
<div class="p-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{url('package')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('package/update/'. $editData->pack_id)}}" class="row g-3 p-3">
      @csrf
      <div class="col-md-4">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" value="{{$editData->location}}">
        @error('location')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-8">
        <label for="inputPassword4" class="form-label">Description</label>
        <input type="text" class="form-control" id="inputPassword4" name="description" value="{{$editData->pack_des}}">
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-8">
        <label for="inputAddress" class="form-label">Resort</label>
        <input type="text" class="form-control" id="inputAddress" name="resort" value="{{$editData->resort}}">
        @error('resort')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-4">
        <label for="inputAddress2" class="form-label">Booking_Price</label>
        <input type="text" class="form-control" id="inputAddress2" name="price" value="{{$editData->pack_price}}">
        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="inputAddress2" class="form-label">From Date</label>
        <input type="date" class="form-control" id="inputAddress2" name="fromdate" value="{{$editData->from_date}}">
        @error('fromdate')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="inputAddress2" class="form-label">To Date</label>
        <input type="date" class="form-control" id="inputAddress2" name="todate" value="{{$editData->to_date}}">
        @error('todate')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="inputAddress2" class="form-label">Arrival Time</label>
        <input type="time" class="form-control" id="inputAddress2" name="arrival" value="{{$editData->arrival_time}}">
        @error('arrival')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="inputPassword4" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" name="status">

          <option value="">has</option>
          
        </select>
        {{-- @error('resort')
            <span class="text-danger">{{ $message }}</span>
        @enderror --}}
      </div>
      {{-- <div class="col-md-2">
        <label for="inputPassword4" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" name="status" value="{{$editData->crud_status}}">
          @foreach ($status as $item)
          <option value="{{$item->id}}"{{ $editData->crud_status == $item->id ? 'selected' : '' }}>{{$item->status_name}}</option>
          @endforeach
          
        </select>
        @error('resort')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div> --}}
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection