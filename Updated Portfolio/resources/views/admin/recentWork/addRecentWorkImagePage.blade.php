@extends('layouts.dashboard')



@section('content')
    <div class="row">
        <div class="col-lg-4">
            @if (session('recentInsesrtSuccess'))
                <div class="alert alert-success">{{ session('recentInsesrtSuccess') }}</div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Recent Work Images</h5>
                    <form action="{{route("addRecentWorkImageInsert")}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <label for="categoryName">Recent Work Name</label>
                        <select class="form-select ms-3 form-control border border-dark category_name bg-primary text-light"
                            name="recent_work_name">
                            <option selected>--Select the Recent Work--</option>

                            @foreach ($allRecentWorkInfo as $RecentWorkInfo)
                                <option class="fw-bold" value="{{ $RecentWorkInfo->id }}">
                                    {{ $RecentWorkInfo->recentTitle }}
                                </option>
                            @endforeach
                        </select>

                        @error('recentTitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror



                        <div class="mt-3">
                            <label for="recentImage" class="form-label">Image</label>
                            <img src="" alt="" width="150px" height="150px" id="recentImageView"
                                class="mt-3 mb-3 d-block">
                            <input type="file" class="form-control" multiple name="extrsrecentImage[]"
                                onchange="document.getElementById('recentImageView').src = window.URL.createObjectURL(this.files[0])">

                        </div>

                        @error('recentImage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <button class="btn btn-info mt-3">Add</button>
                    </form>
                </div>


            </div>


        </div>
    </div>
@endsection
