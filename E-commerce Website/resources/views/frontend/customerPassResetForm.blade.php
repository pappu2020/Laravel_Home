@extends('frontend.master')


@section('content')
    <div class="row">
        <div class="col-lg-5 m-auto">



            <h1 class="mt-3 mb-3">Password Reset Request</h1>
            <form class="border p-3 rounded" action="{{ route('customerPassResetStore') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter The Email" name="Resetemail">

                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Send
                        Request</button>
                </div>

                @if (session('passResetLinkSuccess'))
                    <div class="alert alert-success mt-2 mb-2">{{ session('passResetLinkSuccess') }}</div>
                @endif
            </form>

        </div>
    </div>
@endsection
