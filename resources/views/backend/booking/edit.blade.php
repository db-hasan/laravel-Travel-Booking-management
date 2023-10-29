@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{url('/admin/booking')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{url('booking/update/'. $indexData->book_id)}}" class="row g-3 p-3">
      @csrf
      
      <div class="col-md-4">
        <label for="location" class="form-label">Location</label>
        <select class="form-select" aria-label="Default select example" id="location" name="location">
          @foreach ($indexPackage as $itemPackage)
            <option value="{{$itemPackage->pack_id}}" {{ $indexData->book_location == $itemPackage->pack_id ? 'selected' : '' }} >{{$itemPackage->pack_location}}</option>
          @endforeach
        </select>
        @error('location')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="bundle" class="form-label">Package</label>
        <select class="form-select" aria-label="Default select example" id="bundle" name="bundle">
          @foreach ($indexBundle as $itemBundle)
            <option value="{{$itemBundle->bundle_id}}" {{ $indexData->book_bundle == $itemBundle->bundle_id ? 'selected' : '' }} >{{$itemBundle->bundle_name}}</option>
          @endforeach
        </select>
        @error('bundle')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="person" class="form-label">Person</label>
        <input type="text" class="form-control" id="person" name="person" value="{{$indexData->person}}">
        <span id="errorak" class="text-danger"></span>
        @error('person')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="promo" class="form-label">Promo</label>
        <input type="text" class="form-control" id="promo" name="promo" value="{{$indexData->promo}}">
        @error('promo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$indexData->name}}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$indexData->email}}">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{$indexData->phone}}"> 
        @error('phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="" class="form-label">Gender</label>
        <div class="d-flex">
          <div class="form-check">
            <input id="Male" name="Gender" type="radio" class="form-check-input" >
            <label class="form-check-label pe-4" for="Male">Male</label>
          </div>
          <div class="form-check">
            <input id="Female" name="Gender" type="radio" class="form-check-input">
            <label class="form-check-label" for="Female">Female</label>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <label for="birth" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="birth" name="birth" value="{{$indexData->birth}}">
        @error('birth')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="occupation" class="form-label">Occupation</label>
        <input type="text" class="form-control" id="occupation" name="occupation" value="{{$indexData->occupation}}">
        @error('occupation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="nationality" class="form-label">Nationality</label>
        <input type="text" class="form-control" id="nationality" name="nationality" value="{{$indexData->nationality}}">
        @error('nationality')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="nid" class="form-label">NID</label>
        <input type="text" class="form-control" id="inputAddress2" name="nid" value="{{$indexData->nid}}">
        @error('nid')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{$indexData->address}}">
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" value="{{$indexData->city}}">
        @error('city')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-2">
        <label for="zip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="zip" name="zip" value="{{$indexData->zip}}">
        @error('zip')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="payment " class="form-label">Payment </label>
        <select class="form-select" aria-label="Default select example" id="payment" name="payment">
          @foreach ($indexPayment as $itemPayment)
            <option value="{{$itemPayment->ps_id}}" {{ $indexData->payment == $itemPayment->ps_id ? 'selected' : '' }} >{{$itemPayment->ps_name}}</option>
          @endforeach
        </select>
        @error('payment')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-3">
        <label for="book_status " class="form-label">Status </label>
        <select class="form-select" aria-label="Default select example" id="book_status" name="book_status"> 
          @foreach ($indexBookingStatus as $itemBookingStatus)
            <option value="{{$itemBookingStatus->bs_id}}" {{ $indexData->book_status == $itemBookingStatus->bs_id ? 'selected' : '' }} >{{$itemBookingStatus->bs_name}}</option>
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
                    $('#errorak').text('Enter 1 person');
                  }else{
                    $('#errorak').text('');
                }
              });

          } else if ($("#bundle").val() === "2") {
              $('#person').val("2");
              $('#person').on('keyup', function () {
                if ($('#person').val() !== '2') {
                    $('#errorak').text('Enter 2 person');
                  }else{
                    $('#errorak').text('');
                }
              });

          } else if ($("#bundle").val() === "3") {
              $('#person').val("3");
              $('#person').on('keyup', function () {
                if ($('#person').val() !== '3' && $('#person').val() !== '4') {
                  $('#errorak').text('Enter 3 or 4 person');
                }else{
                  $('#errorak').text('');
                }
              });

          }else if ($("#bundle").val() === "4") {
            $('#person').val("3");
            $('#person').on('keyup', function () {
              if ($('#person').val() !== '3' && $('#person').val() !== '4') {
                $('#errorak').text('Enter 3 or 4 person');
              }else{
                $('#errorak').text('');
              }
            });

          }else if($("#bundle").val() === "5") {
            $('#person').val("");
              $('#person').on('keyup', function () {
                if ($('#person').val() !== '') {
                    $('#errorak').text('');
                  }else{
                    $('#errorak').text('Enter person');
                }
              });

          }else {
              $('#person').val("");
          }
      });
  });

  // $(document).ready(function() {
  //   $('#promo').attr('value', 'N/A')
  // });

</script>

@endsection