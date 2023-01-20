@extends('layouts.dashboard')
<style>
    
</style>

@section('content')
    <div class="container-fluid">
       
        <div class="row">
            <div class="col-lg-6 m-auto serviceAddForm">
                @if (session('serviceInsertSuccess'))
                    <div class="alert alert-success">{{ session('serviceInsertSuccess') }}</div>
                @endif
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">Add Service Section Content</h5>
                        <form action="{{ route('serviceSectionInsert') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="service_title" class="form-label">Title</label>
                                <input type="text" class="form-control border border-dark" name="service_title">
                            </div>

                            @error('service_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="service_icon" class="form-label">Icon</label>
                                <input type="text" class="form-control border border-dark" name="service_icon">
                            </div>

                            @error('service_icon')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="input-group mt-3 mb-3">
                                <span class="input-group-text">Description</span>
                                <textarea class="form-control border border-dark" name="service_description"></textarea>
                            </div>

                            @error('service_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <button type="submit" class="btn btn-info mt-3">Add</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
       
       
       
       
       
       
       
        <div class="row">
            <div class="col-lg-12 myServiceTableDiv">

                <div class="card">
                    <div class="card-body">
                        <h3> Service Section Content List</h3>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created By</th>
                                    
                                    <th scope="col">Updated At</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($AllServiceSecData as $key => $ServiceSecData)
                                    <tr class="myServiceTableD">
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $ServiceSecData->service_title }}</td>
                                        <td><i class="{{ $ServiceSecData->service_icon }}"></i></td>
                                        <td>{{ $ServiceSecData->service_description }}</td>
                                        <td>{{ $ServiceSecData->rel_to_users->name }}</td>
                                        
                                        <td>{{($ServiceSecData->updated_at == null? $ServiceSecData->updated_at : $ServiceSecData->updated_at)}}</td>
                                        <td>{{ $ServiceSecData->created_at->diffForHumans()}}</td>
                                        <td>


                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                   <i class="fa-solid fa-colon"></i>
                                                </button>
                                                <ul class="dropdown-menu text-center w-25" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="{{route("serviceSectionEditPage",$ServiceSecData->id)}}"><button class="btn btn-success">Edit</button></button></a></li>
                                                    <li><a class="dropdown-item" href="{{route("serviceSectionDelete",$ServiceSecData->id)}}"><button class="btn btn-danger">Delete</button></a></li>
                                                  
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

        </div>


       
    </div>
@endsection
