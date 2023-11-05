
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{url('/admin/user/create')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Roll</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th class="ps-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexUser as $itemUser)
                <tr>
                    <td>{{$itemUser->user_id}}</td> 
                    <td>{{$itemUser->user_name}}</td> 
                    <td>{{$itemUser->user_email}}</td> 
                    <td>{{$itemUser->user_phone}}</td> 
                    <td>{{$itemUser->role_name}}</td>
                    <td>{{$itemUser->status_name}}</td>
                    <td>
                        <img src="/images/{{$itemUser->user_img}}" alt="" style="height: 40px; width: 40px;" class="rounded">
                    </td> 
                    <td class="icons">
                        <a href="{{url('bundle/show/'.$itemUser->user_id)}}" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('bundle/edit/'.$itemUser->user_id)}}" type="button"  class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{url('bundle/destroy/'.$itemUser->user_id)}}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
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