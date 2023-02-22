@extends('layouts.dashboardLayout')

<style>
     .content {
        margin-top: 30px;
        width: 480px;
        height: 400px;
        overflow: scroll;

    }

    .contentPara {
        font-size: 15px;
    }

    .title_div {

        background-color: green;
        padding: 15px;
        color: white;
        font-size: 15px;
        text-align: center;
        margin-left: 35px;
        margin-bottom: 20px;

    }



    .myPostCard {
        margin-right: 40px;
        margin-left: 50px;
        margin-top: 25PX;
    }


    .nodata {
        margin: auto;
        padding: 50px;
        color: red;
    }


    @media (min-width: 300px) and (max-width: 575px) {

        .content {
            margin-top: 30px;
            width: 300px;
            height: 400px;
            overflow: scroll;
        }

        .contentPara {
            font-size: 15px;
        }

        .title_div {

            background-color: green;
            padding: 10px;
            color: white;
            font-size: 18px;
            text-align: center;
            margin-left: 5px;
            margin-bottom: 10px;

        }

        .myPostCard {
            margin-right: 0px;
            margin-left: 0px;
            margin-top: 25PX;
        }

    }
</style>



@section('content')
    <span class="title_div">My Pending Post</span>

    <div class="row">

        @forelse ($authorPosts as $authorPost)
            <div class="card rounded col-lg-5 myPostCard">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img class="img-xs rounded-circle"
                                src="{{ asset('uploads/userProfile') }}/{{ $authorPost->rel_to_users->photo }}"
                                alt="">
                            <div class="ml-2">
                                <h5>{{ $authorPost->rel_to_users->name }}</h5>
                                <p class="tx-11 text-muted">{{ $authorPost->created_at->diffForHumans() }}</p>
                            </div>
                        </div>


                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-three-dots"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route("myPostUpdatePage",$authorPost->id)}}">Edit</a>
                                <a class="dropdown-item" href="{{route("myPostDelete",$authorPost->id)}}">Delete</a>
                                <a class="dropdown-item" href="#">Go to post</a>
                            </div>
                        </div>



                    </div>
                </div>


                <div class="card-body">
                    <h3 class="mb-3 fst-italic fw-bold">{{ $authorPost->title }}</h3>
                    <span>
                        <h6 class="mt-3 mb-3">Category: <span
                                class="badge bg-success text-light">{{ $authorPost->rel_to_category->categoryName }}</span>
                            || Tags: @foreach (App\Models\tagPostModel::where('post_id', $authorPost->id)->get() as $tagsInfo)
                                <span class="badge bg-danger text-light"> {{ $tagsInfo->rel_to_tags->tagName }}</span>
                            @endforeach
                        </h6>
                        <img class="img-fluid" width="600px" height="600px"
                            src="{{ asset('uploads/blogerPost') }}/{{ $authorPost->featured_img }}" alt="">

                        <div class="content">
                            <p> {!! $authorPost->description !!}</p>
                        </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex post-actions">
                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                            <i class="icon-md" data-feather="heart"></i>
                            <p class="d-none d-md-block ml-2">Like</p>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                            <i class="icon-md" data-feather="message-square"></i>
                            <p class="d-none d-md-block ml-2">Comment</p>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center text-muted">
                            <i class="icon-md" data-feather="share"></i>
                            <p class="d-none d-md-block ml-2">Share</p>
                        </a>
                    </div>
                </div>

            </div>
            @empty
            <div class="nodata">
                <h2>No Post Avaliable</h2>
            </div>
        @endforelse
    @endsection
