<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/vendors/core/core.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_asset/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('dashboard_asset/images/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper">

                                        <img width="237px" height="430px"
                                            src="{{ asset('dashboard_asset/images/signup.jpg') }}" alt="">

                                    </div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2"><img width="50px"
                                                height="50px" src="{{ asset('dashboard_asset/images/logo.png') }}"></a>
                                        <h5 class="text-muted font-weight-normal mb-4">Reset Your Password</h5>
                                        <form class="forms-sample" method="POST" action="{{route("UserPassChange")}}">
                                            @csrf
                                            <div class="form-group col-md-6">
                                                <label>New Password *</label>
                                                <input type="password" class="form-control" placeholder="Password*"
                                                    name="password">
                                                @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <input type="hidden" value="{{ $tokenInfo }}" name="tokenInfoId">





                                            <div class="form-group col-md-6">
                                                <label>Confirm Password *</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Confirm Password*" name="password_confirmation">

                                                @error('password_confirmation')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <button class="btn btn-success m-auto" type="submit">Change</button>

                                            @if (session('passresetReq'))
                                                <p class="mt-3 text-danger">{{ session('passresetReq') }} </p>
                                            @endif

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('dashboard_asset/vendors/core/core.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dashboard_asset/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('dashboard_asset/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <!-- end custom js for this page -->

</body>

</html>
