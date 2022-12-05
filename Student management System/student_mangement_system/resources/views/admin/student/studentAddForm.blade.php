@extends('layouts.addOfficerDashboard')
<style>
    .stuRegFormDiv {
        padding-left: 250px;
        padding-top: 30px;
        width: 1300px;




    }

    .stuForm {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;



    }

    .imgDiv {
        position: absolute;
        margin-left: 800px;
        margin-top: 200px;
    }
</style>

@section('content')
    <div class="row stuRegFormDiv">

        <h4>Student Registration Form</h4>

        <form action="{{ route('studentInsert') }}" method="post" enctype="multipart/form-data" class="stuForm">
            @csrf


            <div class="row">
                <div class="col-lg-4 mb-2 mt-3">


                    <select class="form-select form-control" name="class" id="classId">

                        <option selected>===Select the class===</option>

                        @foreach ($allclassList as $classList)
                            <option value="{{ $classList->className }}">{{ $classList->className }}</option>
                        @endforeach


                    </select>


                </div>


                <div class="col-lg-4 mb-2 mt-3">


                    <select class="form-select form-control" name="courses" id="courseId">

                        <option selected>===Select the Course===</option>



                    </select>


                </div>


                <div class="col-lg-4 mb-2 mt-3 imgDiv">

                    <img src="" alt="" width="200px" height="200px" id="imgStudentView">
                    <label for="img" class="form-label d-block">Upload Image</label>
                    <input type="file" name="img"  onchange="document.getElementById('imgStudentView').src = window.URL.createObjectURL(this.files[0])">
                    @error('img')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror


                </div>

                





            </div>


            <div class="row">



                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName"
                            placeholder="Enter the first name">
                    </div>

                    @error('firstName')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror


                </div>

                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName"
                            placeholder="Enter the last name">
                    </div>

                    @error('lastName')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror


                </div>


                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="fatherName" class="form-label">Father's Name</label>
                        <input type="text" class="form-control @error('fatherName') is-invalid @enderror"
                            name="fatherName" placeholder="Enter the Father's name">
                    </div>

                    @error('fatherName')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>




            </div>


            <div class="row">

                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="motherName" class="form-label">Mother's Name</label>
                        <input type="text" class="form-control @error('motherName') is-invalid @enderror"
                            name="motherName" placeholder="Enter the Mother's name">
                    </div>

                    @error('motherName')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="motherName" class="form-label">Gurdian phone number</label>
                        <input type="number" class="form-control @error('guardianNum') is-invalid @enderror"
                            name="guardianNum" placeholder="Enter the Guardian number">
                    </div>

                    @error('guardianNum')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>

                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="motherName" class="form-label">Birth reg. number</label>
                        <input type="number" class="form-control @error('birthNum') is-invalid @enderror" name="birthNum"
                            placeholder="Enter the Birth registration number">
                    </div>

                    @error('birthNum')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>
            </div>


            <div class="row">

                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="presentAddress" class="form-label">Present Address</label>
                        <textarea name="presentAddress" class="form-control @error('presentAddress') is-invalid @enderror" cols="100"
                            rows="2"></textarea>
                    </div>

                    @error('presentAddress')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>


                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="parmanantAddress" class="form-label">Parmanant Address</label>
                        <textarea name="parmanantAddress" class="form-control @error('parmanantAddress') is-invalid @enderror" cols="100"
                            rows="2"></textarea>
                    </div>

                    @error('parmanantAddress')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>

                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="religion" class="form-label">Religion</label>
                        <input type="text" class="form-control @error('religion') is-invalid @enderror"
                            name="religion" placeholder="Enter the Religion">
                    </div>

                    @error('religion')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>


                <div class="col-lg-4 mb-2 mt-3">

                    <label for="bloodGrp" class="form-label">Blood Group</label>
                    <select class="form-select form-control" name="bloodGrp">

                        <option selected>===Select the Blood Group===</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>





                    </select>


                </div>


                <div class="col-lg-3 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="Nationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control @error('nationality') is-invalid @enderror"
                            name="nationality" placeholder="Enter the Nationality">
                    </div>

                    @error('nationality')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>


                <div class="col-lg-4 mb-2 mt-3">

                    <div class="mb-3">
                        <label for="Nationality" class="form-label">Previous school name</label>
                        <input type="text" class="form-control @error('prevSchName') is-invalid @enderror"
                            name="prevSchName" placeholder="Enter the previous school name">
                    </div>

                    @error('prevSchName')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>

            </div>

            <button type="submit" class="btn btn-info mt-3 mb-3">Submit</button>



        </form>

    </div>
@endsection


@section('javascriptSection')
    <script>
        $('#classId').change(function() {

            var className = $(this).val();


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                type: 'POST',
                url: '/allClassInfo',
                data: {
                    'className': className,
                },
                success: (function(data) {
                    $('#courseId').html(data);
                })
            })


        });
    </script>
@endsection
