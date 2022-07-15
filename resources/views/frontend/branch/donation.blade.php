@extends('frontend.app')

@section('branch-content')

<div class="row m-1">
  <div class="col-lg-12">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">View Donation</h4>
      </div>
      <div class="card-body">
      <div class="table-responsive">
      <table class="table table-responsive-md">
      <thead>
      <tr>
      <th><strong>#id</strong></th>
      <th><strong>Branch id</strong></th>
      <th><strong>Donation</strong></th>
      <th><strong>Dated</strong></th>
      {{-- <th><strong>Action</strong></th> --}}
  </tr>
      </thead>
      <tbody>
          
           @foreach ($donations as $donation)            
      <tr>
      <td>#{{ $donation->id }}</td>
      <td>{{ $donation->branch->branch_name }}</td>
      <td>{{ $donation->donation }}</td>
      <td>{{ $donation->updated_at }}</td>
      {{-- <td>
      <div class="d-flex">
      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
      </div>
      </td> --}}
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