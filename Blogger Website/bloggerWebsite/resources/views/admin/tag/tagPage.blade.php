@extends('layouts.dashboardLayout')\





@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Tag [{{ $alltagCount }}]</h5>


                        <table class="table table-striped table-hover" id="tagId">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>

                                    <th scope="col">Category Name</th>

                                    <th scope="col">Added by</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($alltagInfo as $key => $tagInfo)
                                    <tr>
                                        <th>{{ $key + 1 }}</th>
                                        <td>{{ $tagInfo->tagName }}</td>

                                        <td>{{ $tagInfo->rel_to_users->name }}</td>
                                        <td>{{ $tagInfo->created_at->format('d-m-Y') }}</td>
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
                                                    <a class="dropdown-item btn btn-primary" href="">Edit</a>


                                                    <a class="dropdown-item" href="">Delete</a>


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

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Tag</h4>

                        <form action="{{ route('tagInsert') }}" method="post">
                            @csrf

                            <div class="mb-1">
                                <label for="tagName" class="form-label">Tag Name</label>
                                <input type="text" class="form-control border border-dark" name="tagName">

                            </div>

                            @error('tagName')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('javascriptSection')
    <script>
        $(document).ready(function() {
            $('#tagId').DataTable();
        });
    </script>
@endsection
