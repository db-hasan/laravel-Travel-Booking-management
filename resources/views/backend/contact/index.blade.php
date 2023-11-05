
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th class="ps-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexContact as $item)
                <tr>
                    <td>{{$item->con_id}}</td> 
                    <td>{{$item->con_name}}</td> 
                    <td>{{$item->con_email}}</td> 
                    <td>{{$item->con_subject}}</td> 
                    <td>{{$item->con_message}}</td>
                    <td class="icons">
                        <a href="{{url('contact/destroy/'.$item->con_id)}}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
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