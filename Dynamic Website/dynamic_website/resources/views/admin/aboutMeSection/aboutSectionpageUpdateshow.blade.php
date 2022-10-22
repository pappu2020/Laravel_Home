@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                @if (session('aboutSecContentUpdateSuccess'))
                    <div class="alert alert-success">{{ session('aboutSecContentUpdateSuccess') }}</div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">Edit About Section Content</h5>
                    <form action="{{ route('aboutSectionUpdate') }}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label for="about_Exam_name" class="form-label">Exam/Degree Name</label>
                            <input type="text" class="form-control" name="Update_about_Exam_name"
                                value="{{ $AllaboutSecInfo->about_Exam_name }}">
                        </div>

                        <input type="hidden" name="aboutContentHiddenId" value="{{ $AllaboutSecInfo->id }}">

                        @error('about_Exam_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                      

                        <div class="mb-3">
                            <label for="about_Exam_year" class="form-label">Exam Year</label>
                            <input type="text" class="form-control" name="Update_about_Exam_year"
                                value="{{ $AllaboutSecInfo->about_Exam_year }}">
                        </div>

                        @error('about_Exam_year')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="mb-3">
                            <label for="about_Exam_result" class="form-label">Exam result (%)</label>
                            <input type="text" class="form-control" name="Update_about_Exam_result"
                                value="{{ $AllaboutSecInfo->about_Exam_result }}">
                        </div>

                        @error('about_Exam_result')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror




                        <button type="submit" class="btn btn-info mt-3">Update</button>



                    </form>
                </div>
            </div>
        </div>



        <div class="col-lg-6">
            <div class="card">
                @if (session('aboutDesinsertSuccess'))
                    <div class="alert alert-success">{{ session('aboutDesinsertSuccess') }}</div>
                @endif

                @if (session('aboutDesinsertFail'))
                    <div class="alert alert-danger">{{ session('aboutDesinsertFail') }}</div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">Add Description</h5>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mt-3">
                            <span class="input-group-text">Description</span>
                            <textarea class="form-control" name="aboutSection_description"></textarea>
                        </div>

                        @error('aboutSection_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mt-3">

                            <img src="" alt="" width="300px" height="150px" id="aboutImageView">
                            <div class="mt-3">
                                <label for="aboutImage" class="form-label">Select Image</label>
                                <input class="form-control" type="file" name="aboutImage"
                                    onchange="document.getElementById('aboutImageView').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                        </div>

                        @error('aboutImage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <button type="submit" class="btn btn-info mt-3">Add</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
