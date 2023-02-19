@extends('layouts.bloggerWebsiteLayout')

<style>
    .mydiv {
        margin-bottom: 500px;
    }

    .myform {
        margin-top: 100px;
        margin-left: 300px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }

    .mypasswordForm {
        margin-top: 100px;
        margin-left: 30px;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;

    }
</style>
@section('content')
    <div class="row mydiv">
        <div class="col-lg-5 myform">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit your profile</h4>
                    <form action="{{route("generalUserInfoUpdate")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="about">Write something about you</label>
                            <textarea class="form-control" name="about" rows="3">{{Auth::guard('generaluserLogin')->user()->about}}</textarea>
                            <p>Max limit : 120 words</p>
                        </div>


                        <div class="form-group">
                            <label for="about" class="form-label">Location </label>
                            <input type="text" name="address" value="{{Auth::guard('generaluserLogin')->user()->address}}">
                            
                        </div>




                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="bd-highlight">
                                <label for="profileImg" class="form-label">Profile photo</label>
                                <img src="{{ asset('uploads/genUserProfile') }}/{{ Auth::guard('generaluserLogin')->user()->photo }}" alt="" width="200px" height="100px" class="mt-2  d-block"
                                    id="profileImg">
                                <input type="file" name="profileImg" class="form-control border border-dark mt-3"
                                    onchange="document.getElementById('profileImg').src = window.URL.createObjectURL(this.files[0])">



                            </div>
                            <div class="bd-highlight ml-5">
                                <label for="coverImg" class="form-label">Cover photo</label>
                                <img src="{{ asset('uploads/genUserProfile') }}/{{ Auth::guard('generaluserLogin')->user()->coverphoto }}" alt="" width="200px" height="100px" class="mt-2  d-block"
                                    id="coverImg">
                                <input type="file" name="coverImg" class="form-control border border-dark mt-3"
                                    onchange="document.getElementById('coverImg').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                        </div>





                        <button type="submit" class="btn btn-primary m-auto">Update</button>
                    </form>
                </div>
            </div>

        </div>


        <div class="col-lg-3 mypasswordForm">


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Change your password</h5>

                    <form>
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">Previous Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>  
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>


        </div>
    </div>
@endsection
