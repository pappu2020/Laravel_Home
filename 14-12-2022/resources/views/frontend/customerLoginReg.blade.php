@extends('frontend.master')


@section('content')
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ======================= Login Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-start justify-content-between">



                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="mb-3">
                        <h3>Login</h3>
                    </div>

                    @if (session('customerLoginFail'))
                        <div class="alert alert-danger">{{ session('customerLoginFail') }}</div>
                    @endif
                    <form class="border p-3 rounded" action="{{ route('customerLogin') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" class="form-control" placeholder="Email*" name="Loginemail">
                            @error('Loginemail')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" class="form-control" placeholder="Password*" name="Loginpassword">
                            @error('Loginpassword')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="eltio_k2">
                                    <a href="{{ route('customerPassResetForm') }}">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit"
                                class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Login</button>
                        </div>

                        @if (session('EmailVerifySuccess'))
                           <div class="alert alert-success"> {{ session('EmailVerifySuccess') }}</div>
                        @endif 
                        
                        @if (session('customerVerifyFail'))
                           <div class="alert alert-danger"> {{ session('customerVerifyFail') }}</div>
                        @endif
                    </form>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mfliud">
                    <div class="mb-3">
                        <h3>Register</h3>
                    </div>


                    <form class="border p-3 rounded" action="{{ route('customerRegistration') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Full Name *</label>
                                <input type="text" class="form-control" placeholder="Full Name" name="name">
                            </div>

                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email *</label>
                            <input type="eamil" class="form-control" placeholder="Email*" name="email">
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Password *</label>
                                <input type="password" class="form-control" placeholder="Password*" name="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="form-group col-md-6">
                                <label>Confirm Password *</label>
                                <input type="password" class="form-control" placeholder="Confirm Password*"
                                    name="password_confirmation">

                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>



                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Create
                                An Account</button>
                        </div>

                        @if (session('customerEmailVerify'))
                            <div class="alert alert-success">{{ session('customerEmailVerify') }}</div>
                        @endif
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= Login End ======================== -->
@endsection
