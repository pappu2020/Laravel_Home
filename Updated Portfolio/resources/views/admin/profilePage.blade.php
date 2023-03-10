@extends('layouts.dashboard')


@section('content')

<div class="caontainer-fluid">
    <div class="row">
        <div class="col-lg-4">
         <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Profile picture</h5>
                    <form action="{{route("profileImgUpload")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <img src="{{asset("uploads/user")}}/{{Auth::user()->profileImg}}" alt="" class="mt-3 mb-3" width="250px" height="250px" id="profileImageView">

                        <div class="mt-3">
                            <input type="file" name="profileImg" class="form-control" onchange="document.getElementById('profileImageView').src = window.URL.createObjectURL(this.files[0])">
                        </div>

                        <button type="submit" class="btn btn-info mt-3">Add</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            
        </div>
    </div>
</div>
    
@endsection