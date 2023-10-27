@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/promo')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('/admin/promo/store')}}" class="row g-3 p-3">
      @csrf

      <div class="col-12 ">
        <label for="promo_code" class="form-label">Promo Code<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="promo_code" name="promo_code">
        @error('promo_code')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-12">
        <label for="promo_des" class="form-label">Description</label>
        <input type="text" class="form-control" id="promo_des" name="promo_des">
        @error('promo_des')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-12">
        <label for="promo_percentage" class="form-label">Promo Percentage<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="promo_percentage" name="promo_percentage">
        @error('promo_percentage')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection