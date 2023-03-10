@extends('layouts.dashboard')


@section('content')

<div class="container-fluid">
    <div class="row">
            <div class="col-lg-12 myServiceTableDiv">

                <div class="card">
                    <div class="card-body">
                        <h3> Service Section Trash Bin</h3>

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

                                @foreach ($AllserviceTrashedData as $key => $serviceTrashedData)
                                    <tr class="myServiceTableD">
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $serviceTrashedData->service_title }}</td>
                                        <td><i class="{{ $serviceTrashedData->service_icon }}"></i></td>
                                        <td>{{ $serviceTrashedData->service_description }}</td>
                                        <td>{{ $serviceTrashedData->rel_to_users->name }}</td>
                                        <td>{{ $serviceTrashedData->updated_at->diffForHumans()}}</td>
                                        <td>{{ $serviceTrashedData->created_at->diffForHumans()}}</td>
                                        <td>


                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                   <i class="fa-solid fa-colon"></i>
                                                </button>
                                                <ul class="dropdown-menu text-center w-25" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="{{route("serviceSectionRestore",$serviceTrashedData->id)}}"><button class="btn btn-success">Restore</button></button></a></li>
                                                    <li><a class="dropdown-item" href="{{route("serviceSectionParmanantDelete",$serviceTrashedData->id)}}"><button class="btn btn-danger">Delete</button></a></li>
                                                  
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



 