@extends('layouts.dashboard')


@section('content')
    <div class="container-fluid">
        <div class="col-lg-8">

           

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">About Me Content</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>

                                <th scope="col">Created By</th>
                                <th scope="col">Created At</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($AllaboutDesSecTrashed as $key => $aboutDesSecTrashed)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $aboutDesSecTrashed->aboutSection_description }}</td>

                                    <td><img width="50px"
                                            src="{{ asset('uploads/aboutSection') }}/{{ $aboutDesSecTrashed->aboutImage }}"
                                            alt=""></td>

                                    <td>{{ $aboutDesSecTrashed->rel_to_users->name }}</td>
                                    <td>{{ $aboutDesSecTrashed->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex flex-row bd-highlight mb-3">
                                            <div class=" bd-highlight"><a href="{{route("aboutSectionDesParmanantResore",$aboutDesSecTrashed->id)}}" class="btn btn-info"><span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-arrow-clockwise"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                                            <path
                                                                d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                                        </svg></span></a></div>
                                            <div class=" bd-highlight"><a href="{{route("aboutSectionpageDesParmanantDelete",$aboutDesSecTrashed->id)}}" class="btn btn-danger"><span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                            <path
                                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                        </svg></span></a></div>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>
@endsection
