@extends("layouts.userDashboard")


@section('content')

<div class="caontainer-fluid">
    <div class="row">

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Content info update</h5>
                    <form action="{{route("pagecontactEdit")}}" method="POST">
                        @csrf

                        <div class="mb-3">
                                <label for="customerCareNum" class="form-label">Customer Care Number</label>
                                <input type="number" class="form-control" name="customerCareNum" value="{{$contactInfoById ->first()->customerCareNum}}">

                            </div>

                            <div class="mb-3">
                                <label for="careerNum" class="form-label">careers Number</label>
                                <input type="number" class="form-control" name="careerNum" value="{{$contactInfoById ->first()->careerNum}}">

                            </div>

                            <input type="hidden" name="contactId" value="{{$contactInfoById ->first()->id}}">

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$contactInfoById ->first()->email}}">

                            </div>

                            <label for="address" class="form-label">Address</label>
                            <textarea name="address"cols="10" rows="2" class="form-control mb-3">{{$contactInfoById ->first()->address}}</textarea>

                            <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection