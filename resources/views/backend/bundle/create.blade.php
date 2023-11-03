@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/bundle')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('/admin/bundle/store')}}" class="row g-3 p-3">
      @csrf

      <div class="col-md-4 ">
        <label for="bundle_name" class="form-label">Bundle Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="bundle_name" name="bundle_name" value="{{old('bundle_name')}}">
        @error('bundle_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-5">
        <label for="room_type" class="form-label">Room_type</label>
        <input type="text" class="form-control" id="room_type" name="room_type" value="{{old('room_type')}}">
        @error('room_type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="bundle_percentage" class="form-label">Percentage</label>
        <input type="text" class="form-control" id="bundle_percentage" name="bundle_percentage" value="{{old('bundle_percentage')}}">
        @error('bundle_percentage')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-8">
        <label for="bundle_des" class="form-label">Description</label>
        <input type="text" class="form-control" id="bundle_des" name="bundle_des" value="{{old('bundle_des')}}">
        @error('bundle_des')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection