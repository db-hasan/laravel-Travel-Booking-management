
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="{{asset('backend/js/jquery-3.7.1.min.js') }} "></script>
<script src="{{asset('backend/js/dataTables.js') }} "></script>
@endsection