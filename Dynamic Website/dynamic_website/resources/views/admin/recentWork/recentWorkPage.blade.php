@extends('layouts.dashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Work Content List</h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Sub Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Created_by</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($AllrecentData as $key => $recentData)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $recentData->recentTitle }}</td>
                                        <td>{{ $recentData->recentSubTitle }}</td>
                                        <td><img width="50px"
                                                src="{{ asset('uploads/recentWork') }}/{{ $recentData->recentImage }}"
                                                alt=""></td>
                                        <td>{{ $recentData->rel_to_users->name }}</td>
                                        <td>{{ $recentData->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa-solid fa-colon"></i>
                                                </button>
                                                <ul class="dropdown-menu text-center w-25"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item"
                                                            href=""><button
                                                                class="btn btn-success">Edit</button></button></a></li>
                                                    <li><a class="dropdown-item"
                                                            href=""><button
                                                                class="btn btn-danger">Delete</button></a></li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>

            </div>


            <div class="col-lg-4">
                @if (session('recentInsesrtSuccess'))
                    <div class="alert alert-success">{{ session('recentInsesrtSuccess') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Recent Work Content</h5>
                        <form action="{{ route('recentWorkInsert') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 mt-3">
                                <label for="recentTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" name="recentTitle">

                            </div>

                            @error('recentTitle')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-3">
                                <label for="recentSubTitle" class="form-label">Sub Title</label>
                                <input type="text" class="form-control" name="recentSubTitle">

                            </div>

                            @error('recentSubTitle')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror



                            <div class="mt-3">
                                <label for="recentImage" class="form-label">Image</label>
                                <img src="" alt="" width="150px" height="150px" id="recentImageView"
                                    class="mt-3 mb-3 d-block">
                                <input type="file" class="form-control" name="recentImage"
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
    </div>
@endsection
