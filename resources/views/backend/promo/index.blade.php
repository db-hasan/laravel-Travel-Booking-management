
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{url('/admin/promo/create')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Promo Code</th>
                    <th>Description</th>
                    <th>Percentage</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexPromo as $itemPromo)
                <tr>
                   <td>{{$itemPromo->promo_id}}</td> 
                   <td>{{$itemPromo->promo_code}}</td> 
                   <td>{{$itemPromo->promo_des}}</td> 
                   <td>{{$itemPromo->promo_percentage}}</td> 
                   <td>{{$itemPromo->status_name}}</td> 
                    <td class="icons">
                        <a href="{{url('promo/show/'.$itemPromo->promo_id)}}" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('promo/edit/'.$itemPromo->promo_id)}}" type="button"  class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{url('promo/destroy/'.$itemPromo->promo_id)}}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr> 
                @endforeach   
            </tbody>
        </table>
    </div>
</div>

<script src="{{asset('backend/js/jquery-3.7.1.min.js') }} "></script>
<script src="{{asset('backend/js/dataTables.js') }} "></script>
@endsection