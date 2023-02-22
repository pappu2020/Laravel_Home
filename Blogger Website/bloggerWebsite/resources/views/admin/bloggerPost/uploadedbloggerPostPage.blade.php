@extends('layouts.dashboardLayout')





@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12">

            <div class="myTable">



                <form action="{{ route('uploadedbloggerPostStatus') }}" method="POST">
                    @csrf

                    <table class="table" id="postTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Tags</th>
                                <th scope="col">Featured Photo</th>
                                <th scope="col">Post By</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Staus</th>
                                <th scope="col">Change Staus</th>

                                <th scope="col">Action</th>

                                <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody>



                            @foreach ($allBloggerPost as $key => $BloggerPost)
                                {{-- <input type="hidden" name="blog_id" value="{{ $BloggerPost->id }}"> --}}
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $BloggerPost->title }}</td>
                                    <td>{{ $BloggerPost->rel_to_category->categoryName }}</td>
                                    <td>

                                        @foreach (App\Models\tagPostModel::where('post_id', $BloggerPost->id)->get() as $tags)
                                            {{ $tags->rel_to_tags->tagName }},
                                        @endforeach



                                    </td>
                                    <td>

                                        <img width="300px" height="300px"
                                            src="{{ asset('uploads/blogerPost') }}/{{ $BloggerPost->featured_img }}"
                                            alt="">

                                    </td>


                                    <td>{{ $BloggerPost->rel_to_users->name }}</td>

                                    <td>{{ $BloggerPost->created_at->diffForHumans() }}</td>

                                    <td>


                                        @php
                                            $satusMessgae = '';
                                            if ($BloggerPost->status == 'Approved') {
                                                $satusMessgae = 'Approved';
                                            } elseif ($BloggerPost->status == 'Declined') {
                                                $satusMessgae = 'Declined';
                                            } elseif ($BloggerPost->status == null) {
                                                $satusMessgae = 'New';
                                            } else {
                                                $satusMessgae = 'Not Assigned Yet';
                                            }
                                            
                                        @endphp

                                        <span
                                            class="badge rounded-pill 
                                          
                                          @if ($BloggerPost->status == 'Approved') bg-primary

                                          @elseif ($BloggerPost->status == 'Declined')
                                           bg-danger
                                           
                                           
                                           @elseif ($BloggerPost->status == null)
                                           bg-success
                                           
                                           @else
                                           bg-primary @endif 
                                          
                                          
                                          text-light">{{ $satusMessgae }}</span>







                                    </td>






                                    <td>

                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <circle fill="#000000" cx="5" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="19" cy="12" r="2">
                                                    </circle>
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start"
                                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">


                                            <button value="{{ $BloggerPost->id . ',' . 'Approved' }}" type="submit"
                                                name="stutusButton" class="dropdown-item btn-primary">Approved</button>
                                            <button value="{{ $BloggerPost->id . ',' . 'Declined' }}" type="submit"
                                                name="stutusButton" class="dropdown-item btn-primary">Declined</button>



                                        </div>



                                    </td>

                                    <td><a href="{{ route('authorPostDelete', $BloggerPost->id) }}" class="btn btn-danger">
                                            Delete</a></td>


                                    <td><a href="{{ route('viewPostForApproved', $BloggerPost->id) }}"
                                            class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg></a></td>
                                </tr>
                            @endforeach






                        </tbody>
                    </table>

                </form>
            </div>

        </div>

    </div>
@endsection


@section('javascriptSection')
    <script>
        $(document).ready(function() {
            $('#postTable').DataTable();
        });
    </script>
@endsection
