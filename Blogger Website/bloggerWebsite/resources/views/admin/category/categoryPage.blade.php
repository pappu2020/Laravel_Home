@extends('layouts.dashboardLayout')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Category [{{ $allCategoryCount }}]</h5>


                        <table class="table table-striped table-hover" id="cataId">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>

                                    <th scope="col">Category Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Added by</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($allCategoryInfo as $key => $categories)
                                    <tr>
                                        <th>{{ $key + 1 }}</th>
                                        <td>{{ $categories->categoryName }}</td>
                                        <td><img width="100px" height="70px"
                                                src="{{ asset('uploads/category') }}/{{ $categories->categoryImg }}"></td>
                                        <td>{{ $categories->rel_to_users->name }}</td>
                                        <td>{{ $categories->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp"
                                                    data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <circle fill="#000000" cx="5" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="12" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="19" cy="12"
                                                                r="2" />
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item btn btn-primary"
                                                        href="{{ route('categoryEditPage', $categories->id) }}">Edit</a>


                                                    <a class="dropdown-item" href="">Delete</a>


                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

            <div class="col-lg-5">

                <div class="card">

                    <div class="card-body">


                        <h5 class="card-title">Add Category</h5>

                        
                        @can("category_add")
                            
                       
                        <form action="{{ route('catagoryInsert') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-1">
                                <label for="cataName" class="form-label">Category Name</label>
                                <input type="text" class="form-control border border-dark" name="categoryName">

                            </div>

                            @error('categoryName')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="cataImg" class="form-label">Category Image</label>

                            <div class="mb-1">
                                <img id="categoryImageView" width="200px" height="150px" alt="">

                            </div>


                            <div class="mb-1">

                                <input type="file" class="form-control" name="categoryImg"
                                    onchange="document.getElementById('categoryImageView').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            @error('categoryImg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </form>

                         @endcan



                    </div>
                </div>
            </div>
        </div>
    @endsection


    @section('javascriptSection')
        <script>
            $(document).ready(function() {
                $('#cataId').DataTable();
            });
        </script>
    @endsection
