@extends('layouts.dashboardLayout')



@section('content')
    <div class="container">
        <div class="car">
            <div class="card-body">
                <h4 class="card-title">Users  ({{$allUserCount}})</h4>

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
                        
                        @foreach ($allUserList as $key =>  $UserList)
                            
                        
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$UserList->name}}</td>
                            <td>{{$UserList->email}}</td>
                            <td> <a class="btn btn-danger" href="{{route("userDelete",$UserList->id)}}">Delete</a></td>
                           
                        </tr>

                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
