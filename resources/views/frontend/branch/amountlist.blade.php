@extends('frontend.app')

@section('branch-content')

<div class="row m-1">
    <div class="col-lg-12">
        <div class="card">
        <div class="card-header">
        <h4 class="card-title">View Amount of Branch / Office</h4>
        <div class="col-sm-10">
            <a href="{{ route('branch.amount') }}">
            <button type="submit" class="btn btn-primary float-right">Add Amount</button>
            </a>    
            </div>
    </div>
    
        <div class="card-body">
        <div class="table-responsive">
            <form action="{{ route('amount.show') }}" method="POST">
            <div class="form-group">
                <select class="form-control" name="branch_id" required>
                <option value="" selected> Select Branch</option>
                @foreach ($branchs as $branch)
                <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>    
                @endforeach
                </select>
                </div>
                <div class="col-sm-10 mt-3">
                    <button type="submit" class="btn btn-primary">Add Amount</button>
                    </div>
                </form>
        <table class="table table-responsive-md">
        <thead>
        <tr>
        <th><strong>#id</strong></th>
        <th><strong>Branch id</strong></th>
        <th><strong>Amount</strong></th>
        <th><strong>Action</strong></th>
    </tr>
        </thead>
        <tbody>           
            @foreach ($amounts as $amount)            
        <tr>
        <td>#{{ $amount->id }}</td>
        <td>{{ $amount->branch_id }}</td>
        <td>{{ $amount->amount }}</td>
        <td>
        <div class="d-flex">
        <a href="" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
        <a href="" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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