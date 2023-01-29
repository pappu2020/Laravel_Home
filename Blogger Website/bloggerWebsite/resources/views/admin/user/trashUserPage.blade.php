@extends('layouts.dashboardLayout')



@section('content')
    <div class="container">
        <div class="car">
            <div class="card-body">
                <h4 class="card-title">User List</h4>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($allTrashInfo as $key =>  $UserList)
                            
                        
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$UserList->name}}</td>
                            <td>{{$UserList->email}}</td>
                            <td> <a class="btn btn-danger" href="{{route("userParDelete",$UserList->id)}}">Parmanant Delete</a> <a class="btn btn-info" href="{{route("userRestore",$UserList->id)}}">Restore</a></td>
                           
                        </tr>

                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
