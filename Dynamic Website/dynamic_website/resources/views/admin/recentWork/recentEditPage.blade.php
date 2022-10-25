@extends('layouts.dashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
           
            <div class="col-lg-5 m-auto">
                @if (session('updateRecentSuccess'))
                    <div class="alert alert-success">{{ session('updateRecentSuccess') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Recent Work Content</h5>
                        <form action="{{ route('recentWorkUpdate') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 mt-3">
                                <label for="recentTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" name="UpdaterecentTitle" value="{{$allRecentData->recentTitle}}">

                            </div>

                            <input type="hidden" name="recentUpdateHiddenId" value="{{$allRecentData->id}}">

                            @error('UpdaterecentTitle')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-3">
                                <label for="recentSubTitle" class="form-label">Sub Title</label>
                                <input type="text" class="form-control" name="UpdaterecentSubTitle" value="{{$allRecentData->recentSubTitle}}">

                            </div>

                            @error('UpdaterecentSubTitle')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror



                            <div class="mt-3">
                                <label for="recentImage" class="form-label">Image</label>
                                <img src="{{asset('uploads/recentWork') }}/{{ $allRecentData->recentImage}}" alt="" width="150px" height="150px" id="recentImageView"
                                    class="mt-3 mb-3 d-block">
                                <input type="file" class="form-control" name="UpdaterecentImage"
                                    onchange="document.getElementById('recentImageView').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            @error('UpdaterecentImage')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button class="btn btn-info mt-3">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
