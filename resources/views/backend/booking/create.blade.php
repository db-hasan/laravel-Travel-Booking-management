@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/booking')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('/admin/booking/store')}}" class="row g-3 p-3">
      @csrf
      
      <div class="col-md-4">
        <label for="location" class="form-label">Location<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" id="location" name="location">
        <option value="" selected>Select One</option>
        @foreach ($indexPackage as $itemPackage)
        <option value="{{$itemPackage->pack_id}}">{{$itemPackage->pack_location}}</option>
        @endforeach
        </select> 
        @error('location')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="bundle" class="form-label">Package<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" id="bundle" name="bundle">
          <option value="" selected>Select One</option>
          @foreach ($indexBundle as $itemBundle)
          <option value="{{$itemBundle->bundle_id}}">{{$itemBundle->bundle_name}}</option>
          @endforeach
        </select>
        @error('bundle')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="person" class="form-label">Person<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="person" name="person">
        <span id="errorak" class="text-danger"></span>
        @error('person')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-2">
        <label for="promo" class="form-label">Promo</label>
        <input type="text" class="form-control" id="promo" name="promo">
        @error('promo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="phone" name="phone">
        @error('phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="" class="form-label">Gender<span class="text-danger">*</span></label>
        <div class="d-flex">
          <div class="form-check">
            <input id="male" name="gender" type="radio" class="form-check-input">
            <label class="form-check-label pe-4" for="male"  value="Male" >Male</label>
          </div>
          <div class="form-check">
            <input id="female" name="gender" type="radio" class="form-check-input">
            <label class="form-check-label" for="female"  value="Female" >Female</label>
          </div>
        </div>
        @error('gender')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      
      <div class="col-md-4">
        <label for="birth" class="form-label">Date of Birth<span class="text-danger">*</span></label>
        <input type="date" class="form-control" id="birth" name="birth">
        @error('birth')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="occupation" class="form-label">Occupation</label>
        <input type="text" class="form-control" id="occupation" name="occupation">
        @error('occupation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="nationality" class="form-label">Nationality<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="nationality" name="nationality">
        @error('nationality')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="nid" class="form-label">NID<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="inputAddress2" name="nid">
        @error('nid')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6">
        <label for="address" class="form-label">Address<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="address" name="address">
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="city" class="form-label">City<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="city" name="city">
        @error('city')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="zip" class="form-label">Zip<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="zip" name="zip">
        @error('zip')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="payment " class="form-label">Payment<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" id="payment" name="payment">
          <option value="" selected>Select One</option>
          @foreach ($indexPayment as $itemPaymentStatus)
          <option value="{{$itemPaymentStatus->ps_id}}">{{$itemPaymentStatus->ps_name}}</option>
          @endforeach
        </select>
        @error('payment')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="book_status " class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" id="book_status" name="book_status">
          <option value="" selected>Select One</option>
          @foreach ($indexBookingStatus as $itemBookingStatus)
          <option value="{{$itemBookingStatus->bs_id}}">{{$itemBookingStatus->bs_name}}</option>
          @endforeach
        </select>
        @error('book_status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

<script src="{{asset('backend/js/jquery-3.7.1.min.js') }} "></script>
<script>
$(document).ready(function() {
    $("#bundle").on("change", function() {
      $('#errorak').text('');
        if ($("#bundle").val() === "1") {
            $('#person').val("1");
            $('#person').on('keyup', function () {
              if ($('#person').val() !== '1') {
                  $('#errorak').text('Please enter 1 person');
                }else{
                  $('#errorak').text('');
              }
            });

        } else if ($("#bundle").val() === "2") {
            $('#person').val("2");
            $('#person').on('keyup', function () {
              if ($('#person').val() !== '2') {
                  $('#errorak').text('Please enter 2 person');
                }else{
                  $('#errorak').text('');
              }
            });

        } else if ($("#bundle").val() === "3") {
            $('#person').val("3");
            $('#person').on('keyup', function () {
              if ($('#person').val() !== '3' && $('#person').val() !== '4') {
                $('#errorak').text('Please enter 3 or 4 person');
              }else{
                $('#errorak').text('');
              }
            });

        }else if ($("#bundle").val() === "4") {
          $('#person').val("3");
          $('#person').on('keyup', function () {
            if ($('#person').val() !== '3' && $('#person').val() !== '4') {
              $('#errorak').text('Please enter 3 or 4 person');
            }else{
              $('#errorak').text('');
            }
          });

        }else {
            $('#person').val("");
        }
    });
});

</script>


@endsection