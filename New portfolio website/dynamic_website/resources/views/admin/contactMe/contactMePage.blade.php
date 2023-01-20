@extends('layouts.dashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact me content List</h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Country Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Mobile NO.</th>
                                    <th scope="col">Created_by</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($allContactData as $key => $ContactData)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $ContactData->contact_country_name }}</td>

                                        <td>{{ $ContactData->contact_email }}</td>
                                        <td>{{ $ContactData->contact_address }}</td>
                                        <td>{{ $ContactData->contact_phone_num }}</td>
                                        <td>{{ $ContactData->rel_to_users->name }}</td>
                                        <td>{{ $ContactData->created_at->diffForHumans() }}</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary d-inline" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                        <path
                                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                    </svg></span>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Add Contact Me Content</h5>
                                                                    <form action="{{ route('contactMeUpdate') }}"
                                                                        method="post">
                                                                        @csrf

                                                                        <div class="mb-3 mt-3">
                                                                            <label for="contact_country_name"
                                                                                class="form-label">Country Name</label>
                                                                            <input type="text" class="form-control"
                                                                                name="Updatecontact_country_name" value="{{ $ContactData->contact_country_name }}">

                                                                        </div>

                                                                        <input type="hidden" name="contactHiddenID" id="" value="{{ $ContactData->id }}">
                                                                        @error('Updatecontact_country_name')
                                                                            <div class="alert alert-danger">{{ $message }}
                                                                            </div>
                                                                        @enderror



                                                                        <div class="mb-3 mt-3">
                                                                            <label for="contact_email"
                                                                                class="form-label">Email</label>
                                                                            <input type="email" class="form-control"
                                                                                name="Updatecontact_email" value="{{ $ContactData->contact_email }}">

                                                                        </div>
                                                                        @error('Updatecontact_email')
                                                                            <div class="alert alert-danger">{{ $message }}
                                                                            </div>
                                                                        @enderror




                                                                        <div class="mb-3 mt-3">
                                                                            <label for="contact_address"
                                                                                class="form-label">Address</label>
                                                                            <input type="text" class="form-control"
                                                                                name="Updatecontact_address" value="{{ $ContactData->contact_address }}">

                                                                        </div>
                                                                        @error('Updatecontact_address')
                                                                            <div class="alert alert-danger">{{ $message }}
                                                                            </div>
                                                                        @enderror


                                                                        <div class="mb-3 mt-3">
                                                                            <label for="contact_phone_num"
                                                                                class="form-label">Phone Number</label>
                                                                            <input type="number" class="form-control"
                                                                                name="Updatecontact_phone_num" value="{{ $ContactData->contact_phone_num }}">

                                                                        </div>
                                                                        @error('Updatecontact_phone_num')
                                                                            <div class="alert alert-danger">{{ $message }}
                                                                            </div>
                                                                        @enderror




                                                                   
                            


                                                                        <button class="btn btn-info mt-3"
                                                                            type="submit">Update</button>


                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <a href="{{route("contactMeGenDel",$ContactData->id)}}" class="btn btn-danger"><span><svg
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
        </div>



        <div class="row">
            <div class="col-lg-4 m-auto">
                @if (session('contactinsertSuccess'))
                    <div class="alert alert-success">{{ session('contactinsertSuccess') }}</div>
                @endif

                @if (session('contactinsertfail'))
                    <div class="alert alert-danger">{{ session('contactinsertfail') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Contact Me Content</h5>
                        <form action="{{ route('contactMeInsert') }}" method="post">
                            @csrf

                            <div class="mb-3 mt-3">
                                <label for="contact_country_name" class="form-label">Country Name</label>
                                <input type="text" class="form-control" name="contact_country_name">

                            </div>
                            @error('contact_country_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror



                            <div class="mb-3 mt-3">
                                <label for="contact_email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="contact_email">

                            </div>
                            @error('contact_email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror




                            <div class="mb-3 mt-3">
                                <label for="contact_address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="contact_address">

                            </div>
                            @error('contact_address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <div class="mb-3 mt-3">
                                <label for="contact_phone_num" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" name="contact_phone_num">

                            </div>
                            @error('contact_phone_num')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror




                            {{-- <div class="input-group mt-3">
                                <span class="input-group-text">Description</span>
                                <textarea class="form-control" name="customer_description"></textarea>
                            </div>

                            @error('customer_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}


                            <button class="btn btn-info mt-3" type="submit">Add</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
