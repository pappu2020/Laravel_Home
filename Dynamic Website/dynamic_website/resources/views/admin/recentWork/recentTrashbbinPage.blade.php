@extends('layouts.dashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
            


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Works Trash Bin</h5>
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

                                @foreach ($AllrecentTrashedData as $key => $recentTrashedData)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $recentTrashedData->recentTitle }}</td>
                                        <td>{{ $recentTrashedData->recentSubTitle }}</td>
                                        <td><img width="50px"
                                                src="{{ asset('uploads/recentWork') }}/{{ $recentTrashedData->recentImage }}"
                                                alt=""></td>
                                        <td>{{ $recentTrashedData->rel_to_users->name }}</td>
                                        <td>{{ $recentTrashedData->created_at->diffForHumans() }}</td>
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
                                                            href="{{route("recentTrashRestore", $recentTrashedData->id)}}"><button
                                                                class="btn btn-success">Restore</button></button></a></li>
                                                    <li><a class="dropdown-item" href="{{route("recentTrashDelete", $recentTrashedData->id)}}"><button
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
        </div>
    </div>
@endsection
