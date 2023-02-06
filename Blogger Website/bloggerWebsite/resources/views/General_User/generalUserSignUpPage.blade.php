@extends('layouts.bloggerWebsiteLayout')



@section('content')
    <!--Login-->
    <section class="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="login-content">
                        <h4>Sign up</h4>
                        <!--form-->
                        <form class="sign-form widget-form" action="{{route("generalUserInsert")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name">
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group">
                                 <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    name="email">
                            </div>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group">
                                 <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password">
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            <div class="form-group">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation">
                            </div>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            {{--                             
                            
                            
                            <div class="sign-controls form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                    <label class="custom-control-label" for="rememberMe">Agree to our <a href="#"
                                            class="btn-link">terms & conditions</a> </label>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <button type="submit" class="btn-custom">Sign Up</button>
                            </div>
                            <p class="form-group text-center">Already have an account? <a
                                    href="{{ route('generalUserSignInPage') }}" class="btn-link">Login</a> </p>
                        </form>
                        <!--/-->

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
