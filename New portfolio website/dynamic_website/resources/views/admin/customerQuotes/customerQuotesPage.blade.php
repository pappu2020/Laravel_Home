@extends('layouts.dashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Customer Quotes List</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created By</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($AllCustomerData as $key => $CustomerData)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $CustomerData->customerTitle }}</td>
                                        <td><img width="50px"
                                                src="{{ asset('uploads/customerSection') }}/{{ $CustomerData->customerImage }}"
                                                alt=""></td>
                                        <td>{{ $CustomerData->customerPosition }}</td>
                                        <td>{{ $CustomerData->customer_description }}</td>
                                        <td>{{ $CustomerData->rel_to_users->name }}</td>
                                        <td>{{ $CustomerData->created_at->diffForHumans() }}</td>
                                        <td> <a href="{{route("customerQuotesEditPage",$CustomerData->id)}}" class="btn btn-info"><span><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                        <path
                                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                    </svg></span></a>

                                            <a href="{{route("cutomerQuotesGenDel",$CustomerData->id)}}" class="btn btn-danger"><span><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                    </svg></span></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


            <div class="col-lg-4">
                @if (session('customerinsertSuccess'))
                    <div class="alert alert-success">{{ session('customerinsertSuccess') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Customer Quotes Content</h5>
                        <form action="{{ route('customerInsert') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 mt-3">
                                <label for="customerTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" name="customerTitle">

                            </div>
                            @error('customerTitle')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <div class="mb-3 mt-3">
                                <label for="customerPosition" class="form-label">Postion</label>
                                <input type="text" class="form-control" name="customerPosition">

                            </div>
                            @error('customerPosition')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror



                            <div class="input-group mt-3">
                                <span class="input-group-text">Description</span>
                                <textarea class="form-control" name="customer_description"></textarea>
                            </div>

                            @error('customer_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror




                            <div class="mt-3">

                                <label for="customerImage" class="form-label d-block">Image</label>
                                <img src="" width="150px" height="150px" alt="" class="mt-3 mb-3"
                                    id="customweImageView">
                                <input type="file" class="form-control" name="customerImage"
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
