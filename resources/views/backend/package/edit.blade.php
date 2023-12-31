@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/package')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('package/update/'. $editData->pack_id)}}" enctype="multipart/form-data" class="row g-3 p-3">
      @csrf
      <div class="col-md-4">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" value="{{$editData->pack_location}}">
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
      <div class="col-4 ">
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
      <div class="col-4">
        <label for="member" class="form-label">Member</label>
        <input type="text" class="form-control" id="member" name="member" value="{{$editData->member}}">
        @error('member')
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
          @foreach ($statusData as $itemStatus)
          <option value="{{$itemStatus->id}}" {{ $editData->pack_status == $itemStatus->id ? 'selected' : '' }} >{{$itemStatus->status_name}}</option>
          @endforeach
        </select>
        @error('status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="row">
        <div class="col-md-4">
        <label for="pack_img" class="form-label">Image:</label>
        <input type="file" class="form-control" id="pack_img" name="pack_img" value="{{old('pack_img')}}">
        @error('pack_img')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col mt-5 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </div>
    </form>
</div>

@endsection