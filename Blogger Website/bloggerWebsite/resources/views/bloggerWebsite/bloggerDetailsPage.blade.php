@extends('layouts.bloggerWebsiteLayout')
<style>
    .authorBadge {
        margin-left: 15px;
        margin-top: 3px;
        color: white;
    }

    .rel_to_genUsers {
        width: 50px;
        height: 50px;
        margin-right: 20px;
    }
</style>

@section('content')
    <section class="post-single">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-12">
                    <!--post-single-image-->
                    <div class="post-single-image">
                        <img width="1100px" height="800px"
                            src="{{ asset('uploads/blogerPost') }}/{{ $bloggerInfo->first()->featured_img }}" alt="">
                    </div>

                    <div class="post-single-body">
                        <!--post-single-title-->
                        <div class="post-single-title">
                            <h2>{{ $bloggerInfo->first()->title }}</h2>
                            <ul class="entry-meta">
                                <li class="post-author-img">

                                    @if ($bloggerInfo->first()->rel_to_users->photo == null)
                                        <img width="150px" height="150px" class="mx-auto d-block"
                                            src="{{ Avatar::create($bloggerInfo->first()->rel_to_users->name)->toBase64() }}" />
                                    @else
                                        <img id="profileImageView"
                                            src="{{ asset('uploads/userProfile') }}/{{ $bloggerInfo->first()->rel_to_users->photo }}"
                                            width="150px" height="150px" alt="" />
                                    @endif



                                </li>
                                <li class="post-author"> <a
                                        href="{{route("authorPage", $bloggerInfo->first()->rel_to_users->id)}}">{{ $bloggerInfo->first()->rel_to_users->name }}</a></li>
                                <li class="entry-cat"> <a href="" class="category-style-1 "> <span
                                            class="line"></span>
                                        {{ $bloggerInfo->first()->rel_to_category->categoryName }}</a></li>
                                <li class="post-date"> <span class="line"></span>
                                    {{ $bloggerInfo->first()->created_at->format('d-m-Y') }}</li>
                            </ul>

                        </div>

                        <!--post-single-content-->
                        <div class="post-single-content">

                            <p> {!! $bloggerInfo->first()->description !!}</p>
                        </div>

                        <!--post-single-bottom-->
                        <div class="post-single-bottom">
                            <div class="tags">
                                <p>Tags:</p>
                                <ul class="list-inline">

                                    <li>
                                        <a href="blog-layout-2.html">

                                            @foreach (App\Models\tagPostModel::where('post_id', $bloggerInfo->first()->id)->get() as $tagsInfo)
                                                <span class="badge bg-danger text-light">
                                                    {{ $tagsInfo->rel_to_tags->tagName }}</span>
                                            @endforeach


                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="social-media">
                                <p>Share on :</p>
                                <ul class="list-inline">
                                    <li>
                                        <a href="https://www.facebook.com/sharer.php?u={{ url()->current() }}">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/sharer.php?u={{ url()->current() }}">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--post-single-author-->
                        <div class="post-single-author ">
                            <div class="authors-info">
                                <div class="image">
                                    <a href="author.html" class="image">
                                        @if ($bloggerInfo->first()->rel_to_users->photo == null)
                                            <a href="{{ route('authorPage', $bloggerInfo->first()->rel_to_users->id) }}"><img
                                                    width="150px" height="150px" class="mx-auto d-block"
                                                    src="{{ Avatar::create($bloggerInfo->first()->rel_to_users->name)->toBase64() }}" /></a>
                                        @else
                                            <a href="{{ route('authorPage', $bloggerInfo->first()->rel_to_users->id) }}"><img
                                                    id="profileImageView"
                                                    src="{{ asset('uploads/userProfile') }}/{{ $bloggerInfo->first()->rel_to_users->photo }}"
                                                    width="150px" height="150px" alt="" /></a>
                                        @endif
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="{{ route('authorPage', $bloggerInfo->first()->rel_to_users->id) }}">
                                        <h4>{{ $bloggerInfo->first()->rel_to_users->name }}</h4>
                                    </a>
                                    <div class="listAuthorInfo">
                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Account Opened: </div>

                                                </div>
                                                <span
                                                    class="badge bg-primary rounded-pill authorBadge">{{ $bloggerInfo->first()->created_at->format('d-m-Y') }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Total Blogs: </div>

                                                </div>
                                                <span
                                                    class="badge bg-primary rounded-pill text-light">{{ App\Models\bloggerPostModel::where('author_id', $bloggerInfo->first()->author_id)->count() }}</span>
                                            </li>

                                        </ol>
                                    </div>
                                    <div class="social-media mt-5">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--post-single-comments-->
                        <div class="post-single-comments">
                            <!--Comments-->
                            <h4>{{ $allCommentscount->count() }} {{ $allCommentscount->count() > 1 ? 'Comments' : 'Comment' }}
                            </h4>

                            <!--comment1-->


                            @foreach ($allComments as $Comments)
                                <ul class="comments">
                                    <li class="comment-item pt-0">
                                        @if ($Comments->rel_to_genUsers->photo == null)
                                            <img class="d-block"
                                                src="{{ Avatar::create($Comments->rel_to_genUsers->name)->toBase64() }}" />
                                        @else
                                            {{-- <a href="{{ route('authorPage', $bloggerInfo->rel_to_users->id) }}"><img
                                                    id="profileImageView"
                                                    src="{{ asset('uploads/userProfile') }}/{{ $bloggerInfo->rel_to_users->photo }}"
                                                    width="150px" height="150px" alt="" /></a> --}}
                                        @endif
                                        <div class="content">
                                            <div class="meta">
                                                <ul class="list-inline">
                                                    <li><a href="#">{{ $Comments->rel_to_genUsers->name }}</a> </li>
                                                    <li class="slash"></li>
                                                    <li>{{ $Comments->created_at->diffForHumans() }}</li>
                                                </ul>
                                            </div>
                                            <p>{{ $Comments->commment }}
                                            </p>
                                            <a href="#reply_form" data-parent="{{ $Comments->id }}" class="reply_btn"><i
                                                    class="las la-reply"></i> Reply</a>
                                        </div>

                                    </li>

                                    @foreach ($Comments->rel_to_replies as $reply)
                                        <li class="comment-item pt-0" style="padding-left:120px">
                                            @if ($reply->rel_to_genUsers->photo == null)
                                                <img width="50px" height="50px" class="d-block"
                                                    src="{{ Avatar::create($reply->rel_to_genUsers->name)->toBase64() }}" />
                                            @else
                                                {{-- <a href="{{ route('authorPage', $bloggerInfo->rel_to_users->id) }}"><img
                                                    id="profileImageView"
                                                    src="{{ asset('uploads/userProfile') }}/{{ $bloggerInfo->rel_to_users->photo }}"
                                                    width="150px" height="150px" alt="" /></a> --}}
                                            @endif
                                            <div class="content">
                                                <div class="meta">
                                                    <ul class="list-inline">
                                                        <li><a href="#">{{ $reply->rel_to_genUsers->name }}</a>
                                                        </li>
                                                        <li class="slash"></li>
                                                        <li>{{ $reply->created_at->diffForHumans() }}</li>
                                                    </ul>
                                                </div>
                                                <p>{{ $reply->commment }}
                                                </p>
                                                <a href="#reply_form" data-parent="{{ $Comments->id }}"
                                                    class="reply_btn"><i class="las la-reply"></i> Reply</a>
                                            </div>

                                        </li>
                                        @endforeach

                                </ul>
                            
                            @endforeach
                            @auth('generaluserLogin')
                                <!--Leave-comments-->
                                <div class="comments-form">
                                    <h4>Leave a Reply</h4>
                                    <!--form-->
                                    <form action="{{ route('commentsInsert') }}" method="post" id="reply_form">
                                        @csrf
                                        <p>Your email adress will not be published ,Requied fileds are marked*.</p>
                                        <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                            Your message was sent successfully.
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" readonly
                                                        value="{{ Auth::guard('generaluserLogin')->user()->name }}"
                                                        class="form-control" placeholder="Name*" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" readonly
                                                        value="{{ Auth::guard('generaluserLogin')->user()->email }}"
                                                        class="form-control" placeholder="Email*" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="comment" class="form-label">Enter your comment here [Maximum
                                                        lenght of comment is 250 words]</label>
                                                    <textarea name="comment" cols="30" rows="5" class="form-control"></textarea>
                                                </div>

                                                @error('comment')
                                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-lg-12">


                                                <button type="submit" name="submit" class="btn-custom">
                                                    Send Comment
                                                </button>
                                            </div>

                                            <input type="hidden" name="parent_id" class="parent_id">
                                            <input type="hidden" name="post_id" value="{{ $bloggerInfo->first()->id }}">
                                        </div>
                                    </form>
                                    <!--/-->
                                </div>
                            @else
                                <div class="alert alert-warning m-auto">
                                    <p>Please, Login in to your account for leave a comment &nbsp &nbsp &nbsp <a
                                            class="btn btn-primary float-right"
                                            href="{{ route('generalUserSignInPage') }}">Login</a></p>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('javascript')
    <script>
        $('.reply_btn').click(function() {
            var parent_id = $(this).attr('data-parent');

            $('.parent_id').attr('value', parent_id);
        })
    </script>
@endsection
