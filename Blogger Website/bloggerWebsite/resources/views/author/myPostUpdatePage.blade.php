@extends('layouts.dashboardLayout')





@section('content')
    <div class="card">
        <div class="card-body">
            <div class="h4">Update Your Recent Upload Post</div>



            <form action="{{ route('myPostUpdate') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row mt-4">

                    <div class="col-lg-6 mb-3">


                        <label for="categoryName" class="form-label">Category</label>
                        <select class="form-select form-control border border-dark fw-bold users" name="categoryName">
                            <option selected>Select the Category</option>

                            @foreach ($allCategory as $Category)
                                <option class="text-dark" value="{{ $Category->id }}">{{ $Category->categoryName }}
                                </option>
                            @endforeach

                        </select>

                        @error('categoryName')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror


                    </div>



                    <div class="col-lg-6 mb-3">

                        <label for="categoryName" class="form-label">Tag</label>
                        <br>
                        @foreach ($allTags as $Tags)
                            <input type="checkbox" value="{{ $Tags->id }}" name="tagName[]"> {{ $Tags->tagName }} &nbsp
                        @endforeach

                        @error('tagName')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>




                    <input type="hidden" value="{{ $bloggerPostInfo->first()->id }}" name="blogId">


                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control border border-dark" name="title"
                                value="{{ $bloggerPostInfo->first()->title }}">
                        </div>

                        @error('title')
                            <p class="mt-2 mb-2 text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="col-lg-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="despId" style="height: 200px; border:1px solid black" name="description">{{ $bloggerPostInfo->first()->description }}</textarea>


                        @error('description')
                            <p class="mt-2 mb-2 text-danger">{{ $message }}</p>
                        @enderror


                    </div>


                    <div class="col-lg-6 mt-4">

                        <label for="featuredImg" class="form-label">Featured Image</label>
                        <img src="{{ asset('uploads/blogerPost') }}/{{ $bloggerPostInfo->first()->featured_img }}"
                            alt="" width="200px" height="100px" class="mt-2  d-block" id="featuredImg">
                        <input type="file" name="featuredImg" class="form-control border border-dark mt-3"
                            onchange="document.getElementById('featuredImg').src = window.URL.createObjectURL(this.files[0])">


                         @error('featuredImg')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror


                    </div>


                </div>



                <div class="row">
                    <div class="col-lg-4 m-auto">
                        <div class="mt-4">

                            <button type="submit" class="btn btn-primary form-control mt-4">Update Post</button>

                        </div>
                    </div>
                </div>























            </form>


        </div>
    </div>
@endsection


@section('javascriptSection')
    <script>
        $(document).ready(function() {
            $('#despId').summernote();
        });
    </script>
@endsection
