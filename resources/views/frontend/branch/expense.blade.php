@extends('frontend.app')

@section('branch-content')

<div class="row m-1">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
        <div class="card-header">
        <h4 class="card-title">Check Expenses</h4>
        </div>
        <div class="card-body">
        <div class="basic-form">
        <form action="" method="POST">
        @csrf
                <div class="form-group">
                <select class="form-control" name="branch_id" required>
                <option value="" selected> Select Branch</option>
                @foreach ($branchs as $branch)
                <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>    
                @endforeach
                </select>
                </div>
                <div class="col-xl-12 col-lg-12 mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>
<div class="row m-1">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
        <div class="card-header">
        <h4 class="card-title">Check Donation</h4>
        </div>
        <div class="card-body">
        <div class="basic-form">
        <form action="" method="POST">
        @csrf
                <div class="form-group">
                <select class="form-control" name="branch_id" required>
                <option value="" selected> Select Branch</option>
                @foreach ($branchs as $branch)
                <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>    
                @endforeach
                </select>
                </div>
                <div class="col-lg-12 mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>

@endsection