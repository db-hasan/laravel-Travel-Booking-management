@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/expense')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('expense/update/'. $indexData->expense_id)}}" class="row g-3 p-3">
      @csrf
      
      <div class="col-md-4">
        <label for="expense_location" class="form-label">Package<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" id="expense_location" name="expense_location">
        <option value="" selected>Select One</option>
        @foreach ($indexPackage as $itemPackage)
        <option value="{{$itemPackage->pack_id}}" {{ $indexData->expense_location == $itemPackage->pack_id ? 'selected' : '' }}>{{$itemPackage->pack_location}}</option>
        @endforeach
        </select> 
        @error('expense_location')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="expense_type" class="form-label">Expense Type<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" id="expense_type" name="expense_type">
          <option value="" selected>Select One</option>
          @foreach ($indexCosttype as $itemCosttype)
          <option value="{{$itemCosttype->costtype_id}}" {{ $indexData->expense_type == $itemCosttype->costtype_id ? 'selected' : '' }}>{{$itemCosttype->costtype_name}}</option>          @endforeach
        </select>
        @error('expense_type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="expense_price" class="form-label">Price<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="expense_price" name="expense_price" value="{{$indexData->expense_price}}">
        <span id="errorak" class="text-danger"></span>
        @error('expense_price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-10 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>


@endsection