@extends('layouts.dashboardLayout')




@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Profile</a></li>

        </ol>
    </nav>


    <div class="row">
        <div class="col-lg-7">

            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" action="{{ route('userProfileUpdate') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                value="{{ $UserInfo->first()->name }}" name="name">
                        </div>

                        <input type="hidden" name="userId" value="{{ $UserInfo->first()->id }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                value="{{ $UserInfo->first()->email }}" name="email">
                        </div>
                        <div class="form-group">
                            <label for="profilePic">Profile Photo</label>
                            <img src="{{ asset('uploads/userProfile/') }}/{{ $UserInfo->first()->photo }}" alt=""
                                width="150px" height="150px" class="d-block" id="profileImageView">
                            <input type="file" class="form-control"
                                onchange="document.getElementById('profileImageView').src = window.URL.createObjectURL(this.files[0])"
                                name="photo">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>

                    </form>
                </div>
            </div>

        </div>

        <div class="col-lg-5">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Change your password</h5>

                    <form action="{{ route('UserPassUpdate') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputPassword1">Previous Password</label>
                            <input type="password" class="form-control" name="previous_Password">
                        </div>

                        @error('previous_Password')
                            
                                <p class="mt-2 mb-2 text-danger">{{$message}}</p>
                            
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        @error('password')
                            <p class="mt-2 mb-2 text-danger">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>

                         @error('password_confirmation')
                            <p class="mt-2 mb-2 text-danger">{{$message}}</p>
                        @enderror

                        <button type="submit" class="btn btn-primary">Update</button>

                        @if (session("pass_not_matched"))

                        <p class="text-danger mt-2 mb-2">{{session("pass_not_matched")}}</p>
                            
                        @endif
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
