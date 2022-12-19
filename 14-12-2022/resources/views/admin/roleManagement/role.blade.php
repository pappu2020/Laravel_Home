@extends('layouts.userDashboard')


@section('content')
    <div class="row">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Role List</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Role Name</th>
                                <th scope="col">Permission</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($allRole as $key => $Role)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $Role->name }}</td>
                                    <td>


                                        @foreach ($Role->getAllPermissions() as $permission)
                                            <span
                                                class="badge rounded-pill bg-success my-2 text-light">{{ $permission->name }}</span>
                                        @endforeach



                                    </td>
                                    <td>



                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <circle fill="#000000" cx="5" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="19" cy="12" r="2">
                                                    </circle>
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item btn btn-primary"
                                                href="">Edit</a>
                                            <a class="dropdown-item"
                                                href="">Delete</a>
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
            {{-- <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add new permission</h5>
                    <form action="{{ route('addPermission') }}" method="post">
                        @csrf

                        <form>
                            <div class="mb-3">
                                <label for="permission" class="form-label">Permission Names</label>
                                <input type="text" class="form-control" name="permission">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </form>
                </div>
            </div> --}}


            {{-- Add Role --}}


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add new Role</h5>
                    <form action="{{ route('addRole') }}" method="post">
                        @csrf

                        <form>
                            <div class="mb-3">
                                <label for="roleName" class="form-label">Role Names</label>
                                <input type="text" class="form-control border border-dark" name="roleName">
                            </div>


                            <h3>Select Permission</h3>
                            <div class="mb-3">
                                <div class="form-group">

                                    @foreach ($allPermission as $Permission)
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="permission[]"
                                                    value="{{ $Permission->id }}">{{ $Permission->name }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Add Role</button>
                        </form>
                    </form>
                </div>
            </div>



            {{-- Assign  Role --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Assign Role</h5>
                    <form action="{{route("assignRole")}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="userNames">User Name</label>
                            <select class="form-select form-control border border-dark" name="userNamesId">
                                <option selected>Select the user</option>

                                @foreach ($allUsers as $key => $Users)
                                    <option class="text-dark" value="{{ $Users->id }}">{{ $Users->name }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="userNames">Role Name</label>
                            <select class="form-select form-control border border-dark fw-bold" name="roleNamesId">
                                <option selected>Select the Role</option>

                                @foreach ($allRole as $key => $Role)
                                    <option class="text-dark" value="{{ $Role->id }}">{{ $Role->name }}</option>
                                @endforeach

                            </select>
                        </div>






                        <button type="submit" class="btn btn-primary">Assign Role</button>

                    </form>
                </div>
            </div>






        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User List</h5>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($allUsers as $key => $Users)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $Users->name }}</td>
                                    <td>

                                        @forelse ($Users->getRoleNames() as $rolesname)

                                            <span class="badge rounded-pill 
                                            
                                            
                                            @if ($rolesname == "Super admin")
                                            {{"bg-danger"}}

                                            @elseif ($rolesname == "Admin")
                                             {{"bg-primary"}} 
                                             
                                            @elseif ($rolesname == "Moderator")
                                             {{"bg-secondary"}}
                                             
                                            @elseif ($rolesname == "Editor")
                                             {{"bg-info"}}

                                            @elseif ($rolesname == "General officer")
                                             {{"bg-success"}}
                                             
                                            
                                            
                                            
                                            
                                            
                                            
                                            @endif text-light">{{ $rolesname }}</span>
                                            

                                        @empty

                                            Not Assigned Yet
                                        @endforelse


                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <circle fill="#000000" cx="5" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="19" cy="12" r="2">
                                                    </circle>
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item btn btn-primary"
                                                href="">Edit</a>
                                            <a class="dropdown-item"
                                                href="{{route("removeRole",$Users->id)}}">Remove</a>
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
@endsection
