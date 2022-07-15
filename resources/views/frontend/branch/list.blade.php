@extends('frontend.app')
@section('branch-content')
<div class="row m-1">
<div class="col-lg-12">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">View Account of Branch / Office</h4>
    <div class="col-sm-10">
        <a href="{{ route('branch.create') }}">
        <button type="submit" class="btn btn-primary float-right">Create</button>
        </a>    
    </div>

</div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-responsive-md">
            <thead>
    <tr>
    <th><strong>#id</strong></th>
    <th><strong>Admin</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>Branch Name</strong></th>
    <th><strong>Branch Address</strong></th>
    <th><strong>Dated</strong></th>
    <th><strong>Status</strong></th>
    <th><strong>Action</strong></th>
</tr>
    </thead>
    <tbody>
        
        @foreach ($branches as $branch)            
    <tr>
    <td>#{{ $branch->id }}</td>
    <td>{{ $branch->admin->name }}</td>
    <td>{{ $branch->email }}</td>
    <td>{{ $branch->branch_name }}</td>
    <td>{{ $branch->branch_address }}</td>
    <td>{{ $branch->updated_at }}</td>
    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Successful</div></td>
    <td>
    <div class="d-flex">
    <a href="{{ route('branch.edit', $branch->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
    <a href="{{ route('branch.delete', $branch->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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