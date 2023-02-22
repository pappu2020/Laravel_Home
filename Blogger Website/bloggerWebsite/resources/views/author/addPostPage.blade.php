@extends('layouts.dashboardLayout')

<style>
    .short_desp {
        width: 1000px;
        height: 100px;
        
    }

    .text_label{
        font-weight: bold;
    }

    @media (min-width: 300px) and (max-width: 575px) {
        .short_desp {
            width: 300px;
            height: 150px;
            
        }
    }
</style>



@section('content')
    <div class="card">
        <div class="card-body">
            <div class="h4">What's on your mind ? </div>



            <form action="{{ route('bloggerPostInsert') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row mt-4">

                    <div class="col-lg-6 mb-3">


                        <label for="categoryName" class="form-label text_label">Category</label>
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

                        <label for="categoryName" class="form-label text_label">Tag</label>
                        <br>
                        @foreach ($allTags as $Tags)
                            <input type="checkbox" value="{{ $Tags->id }}" name="tagName[]"> {{ $Tags->tagName }} &nbsp
                        @endforeach

                        @error('tagName')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>


                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label text_label">Title</label>
                            <input type="text" class="form-control border border-dark" name="title"
                                value="{{ old('title') }}">
                        </div>

                        @error('title')
                            <p class="mt-2 mb-2 text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-lg-12 mt-2 mb-2">
                        <label for="short_description" class="form-label d-block text_label">Short Description [Please,Write to Short
                            description about your blog between 250 words]</label>
                        <textarea name="short_desp" id="short_desp" class="short_desp">{{ old('short_desp') }}</textarea>
                        @error('short_desp')
                            <p class="mt-2 mb-2 text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="col-lg-12 mt-2 mb-2">
                        <label for="description" class="form-label text_label">Long Description [Please,Write to details about your
                            blog between 3500 words]</label>
                        <textarea class="form-control" id="despId" style="height: 200px; border:1px solid black" name="description">{{ old('description') }}</textarea>


                        @error('description')
                            <p class="mt-2 mb-2 text-danger">{{ $message }}</p>
                        @enderror


                    </div>


                    <div class="col-lg-6 mt-4">

                        <label for="featuredImg" class="form-label text_label">Featured Image</label>
                        <img src="" alt="" width="200px" height="100px" class="mt-2  d-block"
                            id="featuredImg">
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

                            <button type="submit" class="btn btn-primary form-control mt-4">Add Post</button>

                        </div>
                    </div>
                </div>

                @if (session('insertPostSuccess'))
                    <div class=" mt-5 alert alert-danger">{{ session('insertPostSuccess') }}</div>
                @endif























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
