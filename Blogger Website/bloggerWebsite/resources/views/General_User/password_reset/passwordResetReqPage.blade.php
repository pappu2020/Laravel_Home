@extends('layouts.bloggerWebsiteLayout')


@section('content')
    <div class="rowv mt-5">
        <div class="col-lg-6 col-md-8 m-auto">
            <div class="login-content">
                <h4 class="mt-5">Password Reset</h4>
                <p></p>
                <form action="{{ route('generalUserPasswordResetSend') }}" class="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Enter Your Email</label>
                        <input type="email" class="form-control" name="generalUseremail">
                    </div>
                    @error('generalUseremail')
                        <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <button type="submit" class="btn-custom">Send Request</button>
                    </div>

                    @if (session("passresetReq"))

                    <p class="mt-3 text-danger">{{session("passresetReq")}} </p>
                        
                    @endif




                </form>


            </div>
        </div>
    </div>
@endsection
