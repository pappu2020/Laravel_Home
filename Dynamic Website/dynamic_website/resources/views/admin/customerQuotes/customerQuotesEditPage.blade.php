@extends('layouts.dashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
           


            <div class="col-lg-6 m-auto">
                @if (session('updateCustomerSuccess'))
                    <div class="alert alert-success">{{ session('updateCustomerSuccess') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Customer Quotes Content</h5>
                        <form action="{{ route('cutomerQuotesUpdate') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 mt-3">
                                <label for="customerTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" name="UpdatecustomerTitle" value="{{$AllcustomerData ->customerTitle }}">

                            </div>

                            <input type="hidden" name="customerUpdateHiddenId" value="{{$AllcustomerData ->id }}">
                            @error('UpdatecustomerTitle')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <div class="mb-3 mt-3">
                                <label for="customerPosition" class="form-label">Postion</label>
                                <input type="text" class="form-control" name="UpdatecustomerPosition" value="{{$AllcustomerData ->customerPosition }}">

                            </div>
                            @error('UpdatecustomerPosition')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror



                            <div class="input-group mt-3">
                                <span class="input-group-text">Description</span>
                                <textarea class="form-control" name="Updatecustomer_description">{{$AllcustomerData ->customer_description}}</textarea>
                            </div>

                            @error('Updatecustomer_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror




                            <div class="mt-3">

                                <label for="customerImage" class="form-label d-block">Image</label>
                                <img src="{{asset('uploads/customerSection') }}/{{ $AllcustomerData->customerImage}}" width="150px" height="150px" alt="" class="mt-3 mb-3"
                                    id="customweImageView">
                                <input type="file" class="form-control" name="UpdatecustomerImage"
                                    onchange="document.getElementById('customweImageView').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <button class="btn btn-info mt-3" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
