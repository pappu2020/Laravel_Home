@extends("layouts.dashboardLayout")

@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                    <div class="card-body">


                        <h5 class="card-title">Category Update</h5>

                        <form action="{{route("categoryUpdate")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-1">
                                <label for="cataName" class="form-label">Category Name</label>
                                <input type="text" class="form-control border border-dark" name="categoryName" value="{{$allCategoryInfo->first()->categoryName}}">

                            </div>

                            <input type="hidden" value="{{$allCategoryInfo->first()->id}}" name="catId">

                            @error('categoryName')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="cataImg" class="form-label">Category Image</label>

                            <div class="mb-1">
                                <img src="{{asset("uploads/category")}}/{{$allCategoryInfo->first()->categoryImg}}" id="categoryImageView" width="200px" height="150px" alt="">

                            </div>


                            <div class="mb-1">

                                <input type="file" class="form-control" name="categoryImg"
                                    onchange="document.getElementById('categoryImageView').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            @error('categoryImg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>



                    </div>
                </div>
        </div>
    </div>
</div>
    
@endsection