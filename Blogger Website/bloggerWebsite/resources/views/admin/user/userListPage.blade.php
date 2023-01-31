@extends('layouts.dashboardLayout')



@section('content')
    <div class="container">
       <form action="{{route("deleteCheckedUsers")}}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users  ({{$allUserCount}})</h4>

                <table class="table" id="userTable">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="checkAll"> Check All</th>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action &nbsp <button type="submit" class="btn btn-danger">Delete Checked</button> </th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($allUserList as $key =>  $UserList)
                            
                        
                        <tr>
                            <th><input type="checkbox" name="check[]" value="{{$UserList ->id}}"></th>
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

        </form>
    
    
    </div>
@endsection


@section('javascriptSection')

<script>
    $(document).ready( function () {
    $('#userTable').DataTable();
} );
</script>

<script>
    $("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
    
@endsection
