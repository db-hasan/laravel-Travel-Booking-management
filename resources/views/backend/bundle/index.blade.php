
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{url('/admin/bundle/create')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Percentage</th>
                    <th>Room_type</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th class="ps-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexbundle as $itembundle)
                <tr>
                   <td>{{$itembundle->bundle_id}}</td> 
                   <td>{{$itembundle->bundle_name}}</td> 
                   <td>{{$itembundle->bundle_percentage}}</td> 
                   <td>{{$itembundle->room_type}}</td> 
                   <td>{{$itembundle->bundle_des}}</td> 
                   <td>{{$itembundle->status_name}}</td> 
                    <td class="icons">
                        <a href="{{url('bundle/show/'.$itembundle->bundle_id)}}" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('bundle/edit/'.$itembundle->bundle_id)}}" type="button"  class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{url('bundle/destroy/'.$itembundle->bundle_id)}}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
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