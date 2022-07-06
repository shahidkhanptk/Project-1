@extends('frontend.app')
@section('branch-content')
<div class="row m-1">
<div class="col-lg-12">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">View Account of Branch / Office</h4>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-responsive-md">
    <thead>
    <tr>
    {{-- <th style="width:50px;">
    <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
    <input type="checkbox" class="custom-control-input" id="checkAll" required="">
    <label class="custom-control-label" for="checkAll"></label>
    </div>
    </th> --}}
    <th><strong>#id</strong></th>
    <th><strong>Branch id</strong></th>
    <th><strong>Name</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>CNIC</strong></th>
    <th><strong>BOB</strong></th>
    <th><strong>Picture</strong></th>
    <th><strong>CNIC Picture</strong></th>
    <th><strong>Mobile Number</strong></th>
    <th><strong>City</strong></th>
    <th><strong>Address</strong></th>
    <th><strong>Action</strong></th>
</tr>
    </thead>
    <tbody>
        
        {{-- @foreach ( as )            
    <tr>
    <td>#{{ }}</td>
    <td>{{  }}</td>
    <td>{{  }}</td>
    <td>{{  }}</td>
    <td>{{  }}</td>
    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Successful</div></td>
    <td>
    <div class="d-flex">
    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
    <a href="" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
    </div>
    </td>
    </tr>
    @endforeach --}}

    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</div>

@endsection