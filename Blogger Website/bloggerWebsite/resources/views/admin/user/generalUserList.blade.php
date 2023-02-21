@extends('layouts.dashboardLayout')



@section('content')
    <div class="container">
        <form action="{{ route('deleteCheckedUsers') }}" method="post">
            @csrf
            @if (session('checkDeleteError'))
                <div class="alert alert-danger">{{ session('checkDeleteError') }}</div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">General Users ({{ $allUserList->count()}})</h4>

                    <table class="table" id="userTable">
                        <thead>
                            <tr>
                             
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Email</th>
                                <th scope="col">Account Opened</th>


                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($allUserList as $key => $UserList)
                                <tr>

                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $UserList->name }}</td>
                                    <td>

                                        @if ($UserList->photo == null)
                                            <img width="50px" height="50px"
                                                src="{{ Avatar::create($UserList->name)->toBase64() }}" />
                                        @else
                                            <a href=""><img id="profileImageView"
                                                    src="{{ asset('uploads/genUserProfile') }}/{{$UserList->photo }}"
                                                    width="50px" height="50px" alt="" /></a>
                                        @endif
                                    </td>
                                    <td>{{ $UserList->email }}</td>
                                    <td>{{ $UserList->created_at->format('d-m-Y')}} &nbsp; [{{$UserList->created_at->diffForHumans()}}]</td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </form>


    </div>
@endsection


@section('javascriptSection')
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable();
        });
    </script>

    <script>
        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>
@endsection
