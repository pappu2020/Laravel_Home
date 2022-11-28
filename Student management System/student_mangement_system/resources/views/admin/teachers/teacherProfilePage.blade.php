@extends('layouts.teacherDashboard')
<link rel="stylesheet" href="{{ asset('dashboard_asset/css/adOfficerDashboardStyle.css') }}">

@section('content')
    <div class="MainSectionContainer">
        <h1 class="mainSectionHeading mb-3">Profile</h1>
        <div class="row mainSectionStart">
            <div class="col-lg-3 mainSectionLeft">

                <img src="{{ asset('uploads/teacher') }}/{{ Auth::guard('teacherlogin')->user()->photo }}" alt=""
                    class="mainSectionLeftImage" width="300px" height="400px">



                <!-- Button trigger modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <span class="bd-highlight editIconPicDiv"><svg xmlns="http://www.w3.org/2000/svg" class="editIconPic"
                            width="24" height="24" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                        </svg></span>
                </button>

                <!-- Modal -->
                <div class="modal fade AdoffModel" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Profile Pic Upload</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('teacherPicUpload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">

                                    <img src="{{ asset('uploads/teacher') }}/{{ Auth::guard('teacherlogin')->user()->photo }}"
                                        alt="" class="adOffiCierProfilePic" width="300px" height="300px"
                                        id="teacherProfileImg">
                                    <input type="file" class="form-control mt-3" name="addTeacherProfileup"
                                        onchange="document.getElementById('teacherProfileImg').src = window.URL.createObjectURL(this.files[0])">


                                    <input type="hidden" value="{{ Auth::guard('teacherlogin')->user()->name }}"
                                        name="teacherName">

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary"
                                        name="addoffProfileupBtn">Upload</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>





















                <div class="d-flex bd-highlight mobileDiv">


                    <p class="mobileNumber flex-grow-1 bd-highlight"><span><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" fill="currentColor" class="bi bi-telephone"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg></span> {{ Auth::guard('teacherlogin')->user()->phoneNum }}</p>




                    <!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdropMobile">
                        <span class="bd-highlight editIconDiv rounded rounded-circle"><svg
                                xmlns="http://www.w3.org/2000/svg" class="editIcon" width="24" height="24"
                                fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg></span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdropMobile" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabelMobile">Change Number</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="./AdofficerProfileUpdate.php" method="POST">
                                        <label for="mobileNumChange" class="form-label w-75">New Number</label>
                                        <input type="number" class="form=control w-75" name="adOfficerNumberForChange"
                                            placeholder="Enter the NUmber">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"
                                        name="adOfficerUpdateBtn">Update</button>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>












                </div>



                <div class="d-flex bd-highlight emailDiv">


                    <p class="email flex-grow-1 bd-highlight"><span><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" fill="currentColor" class="bi bi-envelope"
                                viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg></span> {{ Auth::guard('teacherlogin')->user()->email }}</p>


                    <span class="bd-highlight editIconDiv rounded rounded-circle"><svg xmlns="http://www.w3.org/2000/svg"
                            class="editIcon" width="24" height="24" fill="currentColor" class="bi bi-pen"
                            viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                        </svg></span>

                </div>


            </div>





            <div class="col-lg-8 mainSectionRight">

                <form action="{{ route('teacherInfoUpdate') }}" method="POST">

                    @csrf





                    <div class="row g-3">
                        <div class="col-lg-3">

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control"
                                    value="{{ Auth::guard('teacherlogin')->user()->name }}" name="Name">
                            </div>

                            <input type="hidden" name="teacherHiddenId"
                                value="{{ Auth::guard('teacherlogin')->id() }}">


                        </div>
                        <div class="col-lg-3">

                            <label for="name" class="form-label">Father Name</label>
                            <input type="text" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->fatherName }}" name="FatherName">


                        </div>
                        <div class="col-lg-3">
                            <label for="name" class="form-label">Mother Name</label>
                            <input type="text" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->motherName }}" name="MotherName">

                        </div>

                        <div class="col-lg-3">
                            <label for="name" class="form-label">National Id Number</label>
                            <input type="number" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->nationalid }}" name="NationalId">

                        </div>

                        <div class="col-lg-3">
                            <label for="name" class="form-label">Birth Reg. Number</label>
                            <input type="number" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->birthRegNum }}" name="BirthReg">

                        </div>



                        <div class="col-lg-3">

                            <label for="dob" class="form-label">Date Of Birth</label>

                            <input type="text" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->dob }}" name="Dob">



                        </div>


                        <div class="col-lg-2">

                            <label for="dob" class="form-label">Blood Group</label>

                            <input type="text" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->bloodGrp }}" name="BloodGrp">



                        </div>


                        <div class="col-lg-2">
                            <label for="dob" class="form-label">Religion</label>

                            <input type="text" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->religion }}" name="Religion">
                        </div>

                        <div class="col-lg-2">
                            <label for="dob" class="form-label">Gender</label>

                            <input type="text" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->Gender }}" name="Gender">
                        </div>

                        <div class="col-lg-3">
                            <label for="dob" class="form-label">How to know about us</label>

                            <input type="text" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->Howtoknowaboutus }}" name="HoWTo">
                        </div>


                        <div class="col-lg-4">
                            <label for="dob" class="form-label">Present Address</label>

                            <input type="text" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->presentAddress }}" name="Present">
                        </div>


                        <div class="col-lg-4">
                            <label for="dob" class="form-label">Parmanant Address</label>

                            <input type="text" class="form-control"
                                value="{{ Auth::guard('teacherlogin')->user()->parmanentAddress }}" name="Parmanant">
                        </div>


                        <div class="col-lg-3 addOfficerEditDiv">
                            <button class="addOfficerEditParaLink btn" type="submit" name="addOfficerInfoUpdateBtn">
                                <p class="addOfficerEditPara">Edit Profile</p>
                            </button>
                        </div>


                        @if (session('updateSuccess'))
                            <div class="alert alert-success">{{ session('updateSuccess') }}</div>
                        @endif



                    </div>







                </form>

            </div>

        </div>

    </div>
@endsection
