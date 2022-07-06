@extends('frontend.app')

@section('branch-content')

<div class="row m-1">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
        <div class="card-header">
        <h4 class="card-title">Add Amount</h4>
        </div>
        

        <div class="card-body">
        <div class="basic-form">
        <form action="{{ route('amount.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <select class="form-control" name="branch_id" required>
                <option value="" selected> Select Branch</option>
                @foreach ($branchs as $branch)
                <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>    
                @endforeach
                </select>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" name="amount">
                    <div class="input-group-append">
                    <span class="input-group-text">Rs</span>
                    <span class="input-group-text">0.00</span>
                    </div>
                    </div>
                <div class="col-sm-10 mt-3">
                        <button type="submit" class="btn btn-primary">Add Amount</button>
                        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>


@endsection