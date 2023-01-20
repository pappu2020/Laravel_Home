@extends('layouts.userDashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
            <div class="col-lg-9">

                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">List</h3>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Customer Care Number</th>
                                    <th scope="col">careers Number</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($allContactInfo as $ContactInfo)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ ($ContactInfo->customerCareNum == null ? "Not availabel" : $ContactInfo->customerCareNum ) }}</td>
                                        <td>{{ ($ContactInfo->careerNum == null ? "Not availabel" : $ContactInfo->careerNum ) }}</td>
                                        <td>{{ ($ContactInfo->email == null ? "Not availabel" : $ContactInfo->email ) }}</td>
                                        <td>{{ ($ContactInfo->address == null ? "Not availabel" : $ContactInfo->address ) }}</td>
                                        <td>


                                          <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp"
                                                    data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <circle fill="#000000" cx="5" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="12" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="19" cy="12"
                                                                r="2" />
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item btn btn-primary" href="{{route("pagecontactEditPage",$ContactInfo->id)}}">Edit</a>
                                                    
                                                </div>
                                            </div>



                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Contact Details</h5>
                        <form action="{{ route('pageContactInsert') }}" method="post">
                            @csrf


                            <div class="mb-3">
                                <label for="customerCareNum" class="form-label">Customer Care Number</label>
                                <input type="number" class="form-control" name="customerCareNum">

                            </div>

                            <div class="mb-3">
                                <label for="careerNum" class="form-label">careers Number</label>
                                <input type="number" class="form-control" name="careerNum">

                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">

                            </div>

                            <label for="address" class="form-label">Address</label>
                            <textarea name="address"cols="10" rows="2" class="form-control mb-3"></textarea>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
