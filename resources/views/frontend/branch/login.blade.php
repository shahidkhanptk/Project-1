<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from Admin.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 07:31:33 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Admin - Bootstrap Admin Dashboard" />
<meta property="og:title" content="Admin - Bootstrap Admin Dashboard" />
<meta property="og:description" content="Admin - Bootstrap Admin Dashboard" />
<meta property="og:image" content="social-image.png') }}" />
<meta name="format-detection" content="telephone=no">

<title>Admin - Bootstrap Admin Dashboard</title>

<link rel="shortcut icon" type="{{ asset ('assets/image/png') }}" href="{{ asset ('assets/images/favicon.png') }}" />
<link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="h-100">
<div class="authincation h-100">
<div class="container h-100">
<div class="row justify-content-center h-100 align-items-center">
<div class="col-md-6">
<div class="authincation-content">
<div class="row no-gutters">
<div class="col-xl-12">
<div class="auth-form">
<h4 class="text-center mb-4">Sign</h4>
<h4 class="text-center mb-4">Branch / Office Account</h4>
<form action="{{ route('login.store') }}" method="POST">
@csrf
<div class="form-group">
<label class="mb-1"><strong>Email</strong></label>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="user@branch.com" name="email" required>
</div>
<div class="form-group">
<label class="mb-1"><strong>Password</strong></label>
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="Password" name="password" required>
</div>
<div class="form-row d-flex justify-content-between mt-4 mb-2">
<div class="form-group">
<div class="custom-control custom-checkbox ml-1">
<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
</div>
</div>
</div>
<div class="text-center">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="{{ asset ('assets/vendor/global/global.min.js') }}"></script>
<script src="{{ asset ('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset ('assets/js/custom.min.js') }}"></script>
<script src="{{ asset ('assets/js/deznav-init.js') }}"></script>
</body>

</html>