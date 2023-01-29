@extends('layouts.dashboardLayout')




@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">

            <form class="forms-sample" action="{{route("userProfileUpdate")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                        value="{{$UserInfo->first()->name}}" name="name">
                </div>

                <input type="hidden" name="userId" value="{{$UserInfo->first()->id}}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"  value="{{$UserInfo->first()->email}}" name="email">
                </div>
                <div class="form-group">
                    <label for="profilePic">Profile Photo</label>
                    <img src="{{asset("uploads/userProfile/")}}/{{$UserInfo->first()->photo}}" alt="" width="150px" height="150px" class="d-block" id="profileImageView">
                    <input type="file" class="form-control" onchange="document.getElementById('profileImageView').src = window.URL.createObjectURL(this.files[0])" name="photo">
                </div>
               
                <button type="submit" class="btn btn-primary mr-2">Update</button>
               
            </form>
        </div>
    </div>
@endsection
