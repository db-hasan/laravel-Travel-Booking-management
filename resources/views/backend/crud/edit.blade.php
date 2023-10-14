@extends('backend/layouts/layout')

@section('content')
<div class="p-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{url('crud')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('crud/update/'. $editData->crud_id)}}" class="row g-3 p-3">
      @csrf
      <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputPassword4" name="name" value="{{$editData->crud_name}}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Description</label>
        <input type="text" class="form-control" id="inputPassword4" name="description" value="{{$editData->crud_des}}">
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-8">
        <label for="inputPassword4" class="form-label">Resort</label>
        <input type="text" class="form-control" id="inputPassword4" name="resort" value="{{$editData->resort}}">
        @error('resort')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Price</label>
        <input type="text" class="form-control" id="inputPassword4" name="price" value="{{$editData->crud_price}}">
        @error('resort')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" name="status" value="{{$editData->crud_status}}">
          @foreach ($status as $item)
          <option value="{{$item->id}}"{{ $editData->crud_status == $item->id ? 'selected' : '' }}>{{$item->status_name}}</option>
          @endforeach
          
        </select>
        @error('resort')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection