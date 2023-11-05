@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/user')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('/admin/user/store')}}" enctype="multipart/form-data" class="row g-3 p-3">
      @csrf

      <div class="col-md-4 ">
        <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('user_name')}}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4 ">
        <label for="user_email" class="form-label">Email<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="user_email" name="user_email" value="{{old('user_email')}}">
        @error('user_email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4 ">
        <label for="user_phone" class="form-label">Phone<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="user_phone" name="user_phone" value="{{old('user_phone')}}">
        @error('user_phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4 ">
        <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="password" name="password" value="{{old('password')}}">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      
      <div class="col-md-4">
        <label for="role" class="form-label">Role<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" id="role" name="role" value="{{old('user_role')}}">
        <option value="" selected>Select One</option>
        @foreach ($indexRole as $item)
        <option value="{{$item->role_id}}">{{$item->role_name}}</option>
        @endforeach
        </select> 
        @error('role')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4"></div>

      <div class="col-md-4">
        <input type="file" class="form-control" id="user_img" name="user_img" value="{{old('user_img')}}">
        @error('user_img')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection