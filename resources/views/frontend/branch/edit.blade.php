@extends('frontend.app')

@section('branch-content')
<div class="row m-1">

    <div class="col-lg-12">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Create Account for Branch / Office</h4>
    </div>
    <div class="card-body">
    <div class="basic-form">
    <form action="{{ route('branch.update', $branch->id) }}" method="POST" class="form-valide-with-icon">
     @csrf
        <div class="form-group">
            {{-- <input type="hidden" name="" value={{ $branch->id }}>  --}}
    <label class="text-label">Email</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
    </div>
    <input type="email" class="form-control" id="email" value={{ $branch->email }} name="email" placeholder="Enter an email.." required>
    </div>
    </div>
    <div class="form-group">
        <label class="text-label">Branch Name</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input type="text" class="form-control" id="val-username1" value={{ $branch->branch_name }} name="branch_name" placeholder="Enter a branchname.." required>
        </div>
        </div>
        <div class="form-group">
            <label class="text-label">Branch Address</label>
            <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
            </div>
            <textarea class="form-control" rows="2" id="comment" value={{ $branch->branch_address }} id="val-username1" name="branch_address" placeholder="Enter a branchaddress.." required></textarea>
            </div>
            </div>
    <div class="form-group">
    <label class="text-label">Password</label>
    <div class="input-group transparent-append">
    <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
    <input type="password" class="form-control" id="val-password1" value={{ $branch->password }} name="password" placeholder="Choose a safe one.." required>
    <div class="input-group-append show-pass">
    <span class="input-group-text"> <i class="fa fa-eye-slash"></i>
    </span>
    </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection