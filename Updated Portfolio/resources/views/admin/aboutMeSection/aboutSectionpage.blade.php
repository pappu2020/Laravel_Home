@extends('layouts.dashboard')


@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('aboutSectionpage') }}">About Me section</a></li>

            </ol>
        </div>




        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">About Me Content</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Exam/Degree Name</th>
                                    <th scope="col">Passing Year</th>
                                    <th scope="col">Result (%)</th>
                                    <th scope="col">Created By</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($AllaboutSecData as $key => $aboutSecData)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $aboutSecData->about_Exam_name }}</td>

                                        <td>{{ $aboutSecData->about_Exam_year }}</td>
                                        <td>{{ $aboutSecData->about_Exam_result }}</td>
                                        <td>{{ $aboutSecData->rel_to_users->name }}</td>
                                        <td>{{ $aboutSecData->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex flex-row bd-highlight mb-3">
                                                <div class=" bd-highlight"><a
                                                        href="{{ route('aboutSectionpageUpdate', $aboutSecData->id) }}"
                                                        class="btn btn-info"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-pen" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                            </svg></span></a></div>
                                                <div class=" bd-highlight"><a href="{{route("aboutSectiondelete", $aboutSecData->id)}}"
                                                        class="btn btn-danger"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-trash3" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                            </svg></span></a></div>

                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                  <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">About Me Content</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    
                                    <th scope="col">Created By</th>
                                    <th scope="col">Created At</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($AllaboutSecDecData as $key => $aboutSecDecData)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $aboutSecDecData->aboutSection_description }}</td>

                                        <td><img width="50px" src="{{asset("uploads/aboutSection")}}/{{$aboutSecDecData->aboutImage }}" alt=""></td>
                                        
                                        <td>{{ $aboutSecDecData->rel_to_users->name }}</td>
                                        <td>{{ $aboutSecDecData->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex flex-row bd-highlight mb-3">
                                                <div class=" bd-highlight"><a
                                                        href="{{route("aboutSectionDesPageUpdate",$aboutSecDecData->id)}}"
                                                        class="btn btn-info"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-pen" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                            </svg></span></a></div>
                                                <div class=" bd-highlight"><a href="{{route("aboutSectionDesdelete",$aboutSecDecData->id)}}"
                                                        class="btn btn-danger"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-trash3" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                            </svg></span></a></div>

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
                @if (session('aboutinsertSuccess'))
                    <div class="alert alert-success">{{ session('aboutinsertSuccess') }}</div>
                @endif
                @if (session('homeInsertFail'))
                    <div class="alert alert-danger">{{ session('homeInsertFail') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">About Section Content</h5>
                        <form action="{{ route('aboutSectionInsert') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="mb-3">
                                <label for="about_Exam_name" class="form-label">Exam/Degree Name</label>
                                <input type="text" class="form-control" name="about_Exam_name">
                            </div>

                            @error('about_Exam_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            {{-- <div class="input-group mt-3">
                                <span class="input-group-text">Description</span>
                                <textarea class="form-control" name="home_description"></textarea>
                            </div> --}}

                            {{-- @error('home_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}


                            <div class="mb-3">
                                <label for="about_Exam_year" class="form-label">Exam Year</label>
                                <input type="text" class="form-control" name="about_Exam_year">
                            </div>

                            @error('about_Exam_year')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <div class="mb-3">
                                <label for="about_Exam_result" class="form-label">Exam result (%)</label>
                                <input type="text" class="form-control" name="about_Exam_result">
                            </div>

                            @error('about_Exam_result')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror




                            <button type="submit" class="btn btn-info mt-3">Add</button>



                        </form>
                    </div>
                </div>


                <div class="card">
                    @if (session('aboutDesinsertSuccess'))
                        <div class="alert alert-success">{{ session('aboutDesinsertSuccess') }}</div>
                    @endif

                    @if (session('aboutDesinsertFail'))
                        <div class="alert alert-danger">{{ session('aboutDesinsertFail') }}</div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Add Description</h5>
                        <form action="{{ route('aboutSectionDesInsert') }}" method="post" enctype="multipart/form-data">
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
    </div>
@endsection
