@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/expense')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('/admin/expense/store')}}" class="row g-3 p-3">
      @csrf
      
      <div class="row">
        <div class="col-12 bg-light pt-3 pb-5">
          <label for="ex_package" class="form-label">Package<span class="text-danger">*</span></label>
          <select class="form-select" aria-label="Default select example" id="ex_package" name="ex_package">
          <option value="" selected>Select One</option>
          @foreach ($indexPackage as $itemPackage)
          <option value="{{$itemPackage->pack_id}}">{{$itemPackage->pack_location}}</option>
          @endforeach
          </select> 
          @error('ex_package')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div class="container">
          <div class="expense-rows">
              <div class="row expense-row mb-3">
                  <div class="col-6">
                      <select class="form-select" aria-label="Default select example" name="expense_type[]">
                          <option value="" selected>Select One</option>
                          @foreach ($indexCosttype as $itemCosttype)
                          <option value="{{$itemCosttype->costtype_id}}">{{$itemCosttype->costtype_name}}</option>
                          @endforeach
                      </select>
                      @error('expense_type')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>

                  <div class="col-4">
                      <input type="text" class="form-control" name="expense_price[]" placeholder="Price">
                      @error('expense_price')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="col-2 icons">
                      <a href="javascript:void(0);" class="btn add-row"><i class="fa-solid fa-circle-plus fa-xl" style="color: #1fe04f;"></i></a>
                      <a href="javascript:void(0);" class="btn remove-row"><i class="fa-solid fa-trash fa-xl" style="color: #da1647;"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

{{-- <div class="container">
    <div class="expense-rows">
        <div class="row expense-row mb-3">
            <div class="col-6">
                <select class="form-select" aria-label="Default select example" name="expense_type[]">
                    <option value="" selected>Select One</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="expense_price[]" placeholder="Price">
            </div>
            <div class="col-2 icons">
                <a href="javascript:void(0);" class="btn add-row"><i class="fa-solid fa-circle-plus fa-xl" style="color: #1fe04f;"></i></a>
                <a href="javascript:void(0);" class="btn remove-row"><i class="fa-solid fa-trash fa-xl" style="color: #da1647;"></i></a>
            </div>
        </div>
    </div>
</div> --}}




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    // Event delegation for add-row and remove-row buttons
    $(".container").on("click", ".add-row", function () {
        var newRow = $(".expense-row").first().clone();
        newRow.find("input").val(""); // Clear the input values
        $(this).closest(".expense-row").after(newRow);
    });

    $(".container").on("click", ".remove-row", function () {
        if ($(".expense-row").length > 1) {
            $(this).closest(".expense-row").remove();
        }
    });
});
</script>




@endsection