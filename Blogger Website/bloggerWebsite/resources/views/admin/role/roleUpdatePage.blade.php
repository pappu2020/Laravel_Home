@extends("layouts.dashboardLayout")


@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update permission</h5>
            <form action="{{ route('rolePermissionUpdate') }}" method="post">
                @csrf

                
                    <div class="mb-3">
                        <label for="roleName" class="form-label">Role Names</label>
                        <input type="text" readonly class="form-control border border-dark" value="{{$allRole->first()->name}}">
                    </div>

                    <input type="hidden" name="roleId" value="{{$allRole->first()->id}}">


                    <h3>Select Permission</h3>
                    <div class="mb-3">
                        <div class="form-group">

                            @foreach ($allPermission as $Permission)
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" {{($allRole->first()->hasPermissionTo($Permission->name))?'checked':""}} class="form-check-input" name="permission[]"
                                            value="{{ $Permission->id }}">{{ $Permission->name }}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>

                

                
            </form>
        </div>
    </div>
@endsection
