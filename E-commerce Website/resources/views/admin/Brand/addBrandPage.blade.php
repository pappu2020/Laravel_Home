@extends('layouts.userDashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Brand List</h4>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                               @foreach ($allBrand as $key => $Brand)
                                   
                              
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$Brand->brand_name}}</td>
                                    <td><img width="50px" height="50px" src="{{asset("uploads/brand/")}}/{{$Brand->brand_img}}"></td>
                                    <td>{{$Brand->created_at->diffForHumans()}}</td>
                                </tr>

                                 @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Brand</h5>
                        <form action="{{ route('brandInsert') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="addSize">Brand Name</label>
                                <input type="text" class="form-control" name="brand_name"
                                    placeholder="Enter the Brand name">
                            </div>

                            @error('brand_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="addSize" class="d-block mb-2">Logo</label>

                                <img src="" alt="" width="100px" height="100px" id="brandLogoImageView">
                                <input type="file" class="form-control mt-3" name="brandLogo"
                                    onchange="document.getElementById('brandLogoImageView').src = window.URL.createObjectURL(this.files[0])">
                            </div>

                            @error('brandLogo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror



                            <button type="submit" class="btn btn-info">Add</button>

                            @if (session('brandInsertSuccess'))
                                <div class="alert alert-success">{{ session('brandInsertSuccess') }}</div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
