@extends('frontend.app')

@section('branch-content')
<div class="row m-1">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form action="{{ route('amount.update', $amount->id) }}" method="POST">
            @csrf
            <div class="card-header">
            <h4 class="card-title">ADD AMOUNT</h4>
            </div>
            <div class="card-body">
            <div class="basic-form">
            <label>Select One:</label>
             <select class="form-control" name="branch_id" value="{{ $amount->branch_id }}" required>
                    
                    <option value="{{ $amount->branch->id }}" selected>{{ $amount->branch->branch_name }}</option>    
                    </select>
            </div>
            </div>
                <div class="card-body">
                <div class="basic-form">
                    <label>Amount</label>
                <div class="input-group">
                <input type="nummber" class="form-control" name="amount" value="{{ $amount->amount }}">
                <div class="input-group-append">
                <span class="input-group-text">RS</span>
                <span class="input-group-text">0.00</span>
                </div>
                </div>
                </div>
                </div>
                <div class="col-lg-3">
                <button type="submit" class="btn btn-primary mb-2">Add Amount</button>
                </div>
            </form>
            </div>
    
    </div>
    </div>

@endsection