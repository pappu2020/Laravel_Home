@extends('frontend.master')


@section('content')
    <div class="row">
        <div class="col-lg-5 m-auto">



            <h1 class="mt-3 mb-3">Change Password</h1>
            <form class="border p-3 rounded" action="{{ route('customerPassChange') }}" method="POST">
                @csrf
                <div class="form-group col-md-6">
                    <label>New Password *</label>
                    <input type="password" class="form-control" placeholder="Password*" name="password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <input type="hidden" value="{{$tokenInfo}}" name="tokenInfoId">

               



                <div class="form-group col-md-6">
                    <label>Confirm Password *</label>
                    <input type="password" class="form-control" placeholder="Confirm Password*"
                        name="password_confirmation">

                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Change Password</button>
            </form>

            @if (session("New_pass_update_success"))

            <div class="alert alert-success">{{session("New_pass_update_success")}}</div>
                
            @endif

        </div>
    </div>
@endsection
