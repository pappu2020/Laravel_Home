@extends('layouts.adminDashboard')
<link rel="stylesheet" href="{{asset("dashboard_asset/css/styleSignUp.css")}}">

@section('content')
    <div class="container-fluid">
        <form action="{{route("teacherInsert")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="headingDiv">
                <img src="{{ asset('dashboard_asset/img/logo2.JPG') }}" alt="" width="160px" height="90px"
                    class="headingImg">
            </div>





            <div class="row mainContainer">

                <div class="col-lg-4 regLeftPart">

                    <div class="leftPartRegStart">


                        <legend>Teachers Registration </legend>


                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Enter the Name">

                        </div>

                        @error("name")
                            <p class="text-danger">{{ $message }}</p>
                            
                        @enderror



                        <div class="mb-3">
                            <label for="phoneNum" class="form-label">Phone Number</label>
                            <input type="number" class="form-control @error('phoneNum') is-invalid @enderror" name="phoneNum" placeholder="Enter the phone number">
                        </div>

                        @error('phoneNum')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror


                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter the Email">
                        </div>

                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror



                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter the Password">
                        </div>

                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror



                        <div class="mb-3">
                            <label for="confirm_pass" class="form-label">Confirm password</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                                placeholder="Enter the Password again">
                        </div>

                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror



                    </div>

                </div>
                
                <div class="col-lg-8 regRightPart">

                    <div class="rightPartRegStart">

                        <div class="col-lg-3 mb-3">
                            <p class="mb-1">Position: </p> 
                            <select class="form-select @error('postion') is-invalid @enderror" name="postion">
                                
                                <option selected value="1">Teacher</option>
                                
                            </select>

                        </div>

                        @error('postion')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror




                        <div class="row g-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control @error('fatherName') is-invalid @enderror" placeholder="Father's name" name="fatherName">

                            </div>

                            @error('fatherName')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror






                            <div class="col-lg-4">
                                <input type="text" class="form-control @error('motherName') is-invalid @enderror" placeholder="Mother's name" name="motherName">

                            </div>

                            @error('motherName')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror





                            <div class="col-lg-4">
                                <input type="number" class="form-control @error('gurdianPhone') is-invalid @enderror" placeholder="Gurdian Phone Number"
                                    name="gurdianPhone">

                            </div>









                            <div class="col-lg-4 mt-4">
                                <input type="number" class="form-control @error('nationalid') is-invalid @enderror" placeholder="National Id Number"
                                    name="nationalid">
                            </div>

                            @error('nationalid')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror







                            <div class="col-lg-4 mt-4">
                                <input type="number" class="form-control @error('birthRegNum') is-invalid @enderror" placeholder="Birth Registration Number"
                                    name="birthRegNum">
                            </div>

                            @error('birthRegNum')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror






                            <div class="col-lg-1">
                                <label for="dob" class="form-label dobHeading">DOB</label>
                            </div>






                            <div class="col-lg-3 mt-4">
                                <input type="date" class="form-control @error('dob') is-invalid @enderror" placeholder="DOB" name="dob">

                            </div>

                            @error('dob')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror



                            <div class="col-lg-2 mt-5">
                                <select class="form-select @error('bloodGrp') is-invalid @enderror" name="bloodGrp">
                                    <option selected>Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                </select>

                            </div>

                            @error('bloodGrp')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror





                            <div class="col-lg-2 mt-5">
                                <select class="form-select @error('religion') is-invalid @enderror" name="religion">
                                    <option selected>Religion</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Budhist">Budhist</option>

                                </select>

                            </div>

                            @error('religion')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror





                            <div class="col-lg-3 mt-5 mt-4">
                                <select class="form-select @error('Gender') is-invalid @enderror" name="Gender">
                                    <option selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    Gender

                                </select>

                            </div>


                            @error('Gender')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror





                            <div class="col-lg-3 mt-5 mt-4">
                                <select class="form-select @error('Howtoknowaboutus') is-invalid @enderror" name="Howtoknowaboutus">
                                    <option selected>How to know about us</option>
                                    <option value="Social media">Social media</option>
                                    <option value="Friends">Friends</option>
                                    <option value="Employees">Employees</option>
                                    <option value="others">others</option>

                                </select>

                            </div>

                            @error('Howtoknowaboutus')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror




                        </div>




                        <div class="row g-3">

                            <div class="col-lg-6 mt-5">
                                <div class="input-group">
                                    <span class="input-group-text">present Address</span>
                                    <textarea class="form-control @error('presentAddress') is-invalid @enderror" name="presentAddress"></textarea>

                                </div>

                                @error('presentAddress')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>


                            <div class="col-lg-6 mt-5">
                                <div class="input-group">
                                    <span class="input-group-text">parmanent Address</span>
                                    <textarea class="form-control @error('parmanentAddress') is-invalid @enderror" name="parmanentAddress"></textarea>

                                </div>

                                @error('parmanentAddress')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>





                        </div>


                        <div class="d-flex bd-highlight submitSec mt-5">
                            <div class=" flex-grow-1 bd-highlight"><a href=""
                                    class="text-decoration-none">Back to the dashboard</a></div>
                            <div class="bd-highlight me-5"><button type="submit"
                                    class="btn btn-primary btn-lg rounded-pill">Registration</button></div>

                        </div>

                        @if (session("Reg_success"))

                        <div class="alert alert-success">{{session("Reg_success")}}</div>
                            
                        @endif








                    </div>

                </div>


        </form>
    </div>
@endsection
