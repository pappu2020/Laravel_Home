@extends('layouts.dashboard')


@section('content')
    <div class="container-fluid">

        @if (session('updateHomeSocialSuccess'))
            <div class="alert alert-success">{{ session('updateHomeSocialSuccess') }}</div>
        @endif

        <div class="row">
            <div class="col-lg-5 m-auto">
           <div class="card">
            <div class="card-body">
                <h5 class="fs-3 bg-info text-light d-block p-3">Social Sites Update</h5>
                <form action="{{ route('homeSocialUpdate') }}" method="post">
                    @csrf
                    <div class="mt-3">
                        <label for="Update_home_socialIcon" class="form-label">Social website Icon</label>
                        <input type="text" class="form-control" name="Update_home_socialIcon"
                            value="{{ $homeAllSocialDataForUpdate->homeSocialIcon }}">
                    </div>

                    <input type="hidden" name="hiddenHomeSocialId" value="{{ $homeAllSocialDataForUpdate->id }}">
                    <div class="mt-3">
                        <label for="Update_home_socialaddress" class="form-label">Social website address</label>
                        <input type="text" class="form-control" name="Update_home_socialaddress"
                            value="{{ $homeAllSocialDataForUpdate->homeSocialaddress }}">
                    </div>

                    <button type="submit" class="btn btn-info mt-3">Update</button>
                </form>
            </div>
        </div>
            </div>
        </div>
        
    </div>
@endsection
