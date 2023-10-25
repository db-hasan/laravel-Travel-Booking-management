
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{url('/admin/booking/create')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th><span class="">ID</span></th>
                    <th><span class="">Location</span></th>
                    <th><span class="">Package</span></th>
                    <th><span class="">Person</span></th>
                    <th><span class="">Promo</span></th>
                    <th><span class="">Price</span></th>
                    <th><span class="">Name</span></th>
                    <th><span class="">Number</span></th>
                    <th><span class="">Status</span></th>
                    <th><strong class="ps-5">Action</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Business</td>
                    <td>7</td>
                    <td>#Save50</td>
                    <td>1200</td>
                    <td>Mim Hasan</td>
                    <td>01723629080</td>   
                    <td>Active</td>   
                    <td class="icons">
                        <a href="" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="" type="button"  class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>    
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
@endsection