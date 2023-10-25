
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{url('/admin/package/create')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th><span class="">ID</span></th>
                    <th><span class="">Location</span></th>
                    <th><span class="pe-5">Description</span></th>
                    <th><span class="pe-5">Resort</span></th>
                    <th><span class="">Price</span></th>
                    <th><span class="">From_Date</span></th>
                    <th><span class="">To_Date</span></th>
                    <th><span class="">Arrival_Time</span></th>
                    <th><span class="">Status</span></th>
                    <th><strong class="ps-5">Action</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexData as $item)
                <tr>
                    <td>{{$item->pack_id}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->pack_des}}</td>
                    <td>{{$item->resort}}</td>
                    <td>{{$item->pack_price}}</td>
                    <td>{{$item->from_date}}</td>
                    <td>{{$item->to_date}}</td>
                    <td>{{$item->arrival_time}}</td>   
                    <td>{{$item->status_name}}</td>   
                    <td class="icons">
                        <a href="{{url('package/show/'.$item->pack_id)}}" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('package/edit/'.$item->pack_id)}}" type="button"  class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{url('package/destroy/'.$item->pack_id)}}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                 @endforeach     
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
@endsection