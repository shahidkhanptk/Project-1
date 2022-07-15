@extends('frontend.staff.app')

@section('staff-content')

<div class="col-xl-12 col-lg-12">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Edit Staff</h4>
    </div>
    <div class="card-body">
    <div class="basic-form">
    <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-row">
   
    <div class="form-group col-md-6">
        <div class="form-group">
            <label class="text-label">First Name</label>
            <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input type="text" class="form-control" id="validationCustom01" value="{{ $staff->name }}" name="f_name" placeholder="Enter a firstname.." required>
            </div>
            </div>
    </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <label class="text-label">Last Name</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input type="text" class="form-control" id="validationCustom02" value="" name="l_name" placeholder="Enter a lastname..">
                </div>
                </div>
        </div>        
        <div class="form-group col-md-6">
            <div class="form-group">
                <label class="text-label">Email</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input type="email" class="form-control" id="validationCustom03" value="{{ $staff->email }}" name="email" placeholder="Enter an email.." required>
                </div>
                </div>
        </div>        
        <div class="form-group col-md-6">
            <div class="form-group">
                <label class="text-label">CNIC</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                </div>
                <input type="text" class="form-control" id="validationCustom03" value="{{ $staff->cnic }}" name="cnic" placeholder="Enter a cnic number.." required>
                </div>
                </div>
        </div>        
        <div class="form-group col-md-6">
            <div class="form-group">
                <label class="text-label">Mobile Number</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input type="text" name="mobile" data-validation="number" value="{{ $staff->mobile }}" data-validation-allowing="negative,number" input name="color" data-validation="number" datavalidation-ignore="$" required="required" class="form-control" id="phone_no" placeholder="Phone Number">
                </div>
                </div>
        </div>        
        <div class="form-group col-md-6">
            <div class="form-group">
                <label class="text-label">City</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-calendar-alt	"></i> </span>
                </div>
                <input type="text" class="form-control" id="val-username1" value="{{ $staff->city }}" name="city" placeholder="Enter a city.." required>
                </div>
                </div>
        </div>
        <div class="form-group col-md-6">
            <label class="text-label">Picture</label>

            <div class="form-group">
            <img id="imgpreview" src="{{asset('assets/images/product/2.jpg')}}" style="height: 100px; width: 320px; object-fit: contain;">          
        <div class="input-group mb-3">
            <input type="file" onchange="document.getElementById('imgpreview').src = window.URL.createObjectURL(this.files[0])" name="image" class="form-control" required>
        </div>
        </div>        
        </div>
        <div class="form-group col-md-6">
            <label class="text-label">CNIC Picture</label>
            <div class="form-group">
            <img id="cnicpreview" src="{{asset('assets/images/product/1.jpg')}}" style="height: 100px; width: 320px; object-fit: contain;">          
        <div class="input-group mb-3">
            <input type="file" onchange="document.getElementById('cnicpreview').src = window.URL.createObjectURL(this.files[0])" name="cnic_image" class="form-control" required>
        </div>
        </div>        
        </div>
        <div class="col-md-6 form-material">
            <div class="form-group">
                <label>Date of Birth</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="far fa-calendar-check"></i> </span>
                    </div>
                    <input type="date" class="form-control" value="{{ $staff->d_o_b }}" placeholder="04-07-2022" id="mdate" name="d_o_b" required>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="form-group">
                <label class="text-label">Address</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
                </div>
                <textarea row="3" class="form-control" id="val-username1" value="{{ $staff->address }}" name="address" placeholder="Enter a address.." required></textarea>
                </div>
                </div>
        </div>    
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    @endsection