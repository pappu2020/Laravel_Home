@extends('layouts.dashboard')


@section('content')
    <div class="row">
       


        <div class="col-lg-5 m-auto">
            <div class="card">
                @if (session('aboutSecDesContentUpdateSuccess'))
                    <div class="alert alert-success">{{ session('aboutSecDesContentUpdateSuccess') }}</div>
                @endif

                @if (session('aboutDesinsertFail'))
                    <div class="alert alert-danger">{{ session('aboutDesinsertFail') }}</div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">Update About Me Content</h5>
                    <form action="{{route("aboutSectionDesUpdate")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mt-3">
                            <span class="input-group-text">Description</span>
                            <textarea class="form-control" name="aboutSection_description">{{$AllaboutSecDesInfo->aboutSection_description}}</textarea>
                        </div>

                        <input type="hidden" name="aboutDesHiddenId" value="{{$AllaboutSecDesInfo->id}}">

                        @error('aboutSection_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mt-3">

                            <img src="{{asset("uploads/aboutSection")}}/{{$AllaboutSecDesInfo->aboutImage}}" alt="" width="300px" height="150px" id="aboutImageView">
                            <div class="mt-3">
                                <label for="aboutImage" class="form-label">Select Image</label>
                                <input class="form-control" type="file" name="aboutDesImage"
                                    onchange="document.getElementById('aboutImageView').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                        </div>

                        @error('aboutImage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <button type="submit" class="btn btn-info mt-3">Update</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
