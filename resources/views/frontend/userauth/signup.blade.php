<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('frontend_assets/vendors/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend_assets/vendors/ti-icons/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend_assets/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend_assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend_assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="{{ url('frontend_assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend_assets/js/select.dataTables.min.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('frontend_assets/css/style.css') }}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ url('frontend_assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ url('frontend_assets/images/logo.svg') }}" alt="logo" />
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">
                                Signing up is easy. It only takes a few steps
                            </h6>

                            <form class="forms-sample" method="POST" enctype="multipart/form-data"
                                action="{{ route('registeruser') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" class="form-control" name="username"
                                        id="exampleInputUsername1" placeholder="Username"
                                        value="{{ old('username') }}" />
                                        <span class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                        placeholder="Email" value="{{ old('email') }}" />
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        id="exampleInputPassword1" placeholder="Password" />
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputConfirmPassword1"
                                        name="password_confirmation" placeholder="Password" />
                                        <span class="text-danger">
                                            @error('password_confirmation')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

</body>

</html>
<script src="{{ url('frontend_assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ url('frontend_assets/vendors/chart.js/chart.umd.js') }}"></script>
<script src="{{ url('frontend_assets/vendors/chart.js/chart.umd.js') }}"></script>
<!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
<script src="{{ url('frontend_assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ url('frontend_assets/js/dataTables.select.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ url('frontend_assets/js/off-canvas.js') }}"></script>
<script src="{{ url('frontend_assets/js/template.js') }}"></script>
<script src="{{ url('frontend_assets/js/template.js') }}"></script>
<script src="{{ url('frontend_assets/js/template.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ url('frontend_assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/dashboard.js') }}"></script>
<!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
<!-- End custom js for this page-->
