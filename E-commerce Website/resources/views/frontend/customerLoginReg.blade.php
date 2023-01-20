@extends('frontend.master')

<style>
    .socialLoginDiv {
        padding: 30px;
        background-color: black;
        color: white;

    }


    .socialLoginDiv:hover{
        padding: 30px;
        background-color: blue;
        color: black;
    }

    .googleIcon {
        margin-left: 170px;
    }
</style>


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


                        <h5 class="text-center">Or</h5>


                        <div class="d-flex flex-column bd-highlight socialLoginMainDiv text-center">
                            <div class="p-2 bd-highlight socialLoginDiv">

                                <a href="{{route("googleRedirect")}}" class="socialLogin">
                                    <div class="d-flex flex-row bd-highlight">

                                        <div class="p-2 bd-highlight  googleIcon">

                                            <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                            </svg>


                                        </div>
                                        <div class="p-2 bd-highlight text-light">Continue With Google</div>

                                    </div>
                                </a>
                            </div>




                            <div class="p-2 bd-highlight socialLoginDiv mt-2">

                                <a href="" class="socialLogin">
                                    <div class="d-flex flex-row bd-highlight">

                                        <div class="p-2 bd-highlight  googleIcon">

                                            <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-facebook"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                            </svg>


                                        </div>
                                        <div class="p-2 bd-highlight text-light">Continue With Facebook</div>

                                    </div>
                                </a>
                            </div>



                            <div class="p-2 bd-highlight socialLoginDiv mt-2">

                                <a href="{{route("githubRedirect")}}" class="socialLogin">
                                    <div class="d-flex flex-row bd-highlight">

                                        <div class="p-2 bd-highlight  googleIcon">

                                            <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                            </svg>


                                        </div>
                                        <div class="p-2 bd-highlight text-light">Continue With Github</div>

                                    </div>
                                </a>
                            </div>



                        </div>

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
