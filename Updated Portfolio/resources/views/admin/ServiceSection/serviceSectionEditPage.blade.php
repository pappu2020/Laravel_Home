@extends('layouts.dashboard')


@section('content')


<div class="container-fluid">
    <div class="row">
        
            <div class="col-lg-5 m-auto">
                @if (session('serviceUpdateSuccess'))
                    <div class="alert alert-success">{{ session('serviceUpdateSuccess') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Service Section Content</h5>
                        <form action="{{ route('serviceSectionUpdate') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="service_title" class="form-label">Title</label>
                                <input type="text" class="form-control border border-dark" name="service_title" value="{{ $AllServiceSecUpdateData->service_title}}">
                            </div>

                            <input type="hidden" name="serviceUpdateHiddenId" id="" value="{{$AllServiceSecUpdateData->id}}">

                            @error('service_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="service_icon" class="form-label">Icon</label>
                                <input type="text" class="form-control border border-dark" name="service_icon" value="{{ $AllServiceSecUpdateData->service_icon }}">
                            </div>

                            @error('service_icon')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="input-group mt-3 mb-3">
                                <span class="input-group-text">Description</span>
                                <textarea class="form-control border border-dark" name="service_description">{{ $AllServiceSecUpdateData->service_description }}</textarea>
                            </div>

                            @error('service_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <button type="submit" class="btn btn-info mt-3">Update</button>

                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
    
@endsection



 