@extends('frontend.staff.app')
@section('staff-content')
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
    <th><strong>#id</strong></th>
    <th><strong>Branch</strong></th>
    <th><strong>Name</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>CNIC</strong></th>
    <th><strong>Birth Date</strong></th>
    <th><strong>Picture</strong></th>
    <th><strong>CNIC Picture</strong></th>
    <th><strong>Mobile Number</strong></th>
    <th><strong>City</strong></th>
    <th><strong>Address</strong></th>
    <th><strong>Action</strong></th>
</tr>
    </thead>
    <tbody>
        
         @foreach ($staffs as $staff)            
    <tr>
    <td>#{{$staff->id }}</td>
    <td>{{ $staff->branch->branch_name }}</td>
    <td>{{ $staff->name }}</td>
    <td>{{ $staff->email }}</td>
    <td>{{ $staff->cnic }}</td>
    <td>{{ $staff->d_o_b }}</td>
    <td><img style="width: 40%; height:40%; border-radius:2%; object-fit:fill;" class="img-fluid" alt="Responsive image" src="{{asset('storage/'.$staff->image)}}"></td>
    <td><img style="width: 40%; height:40%; border-radius:2%; object-fit:fill;" class="img-fluid" alt="Responsive image" src="{{asset('storage/'.$staff->cnic_image)}}"></td>
    <td>{{ $staff->mobile }}</td>
    <td>{{ $staff->city }}</td>
    <td>{{ $staff->address }}</td>
    <td>
    <div class="d-flex">
    <a href="{{ route('staff.edit', $staff->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
    <a href="{{ route('staff.delete', $staff->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
    </div>
    </td>
    </tr>
    @endforeach

    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</div>

@endsection