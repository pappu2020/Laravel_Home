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

    .likeDislike {

        margin-bottom: 25px;

    }

    .dislike {
        margin-left: 15px;
    }

    .allCount {
        position: absolute;
        margin-top: 15px;
        margin-left: 799px
    }

    /* .iconCount {
        margin-right: 10px;
    } */

    .iconCount {
        font-size: 26px;
    }

    .myquoteIcon {
        margin-top: -10px;
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


                            <div class="allCount">
                                <div class="d-flex flex-row bd-highlight ">
                                    <div class=" bd-highlight">
                                        <a href="#likesecId" class="text-success">
                                            <span class="iconCount like "><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="26" height="26" fill="currentColor"
                                                    class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                                </svg> ({{ $allLikes == null ? '0' : $allLikes }})</span>
                                        </a>
                                    </div>
                                    {{-- <div class=" bd-highlight">

                                        <span class="iconCount dislike text-danger mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                                            </svg> ()
                                        </span>
                                    </div> --}}
                                    <div class="bd-highlight ml-3">

                                        <a href="#reply_form">
                                            <span class="iconCount comment text-info"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                                                </svg> ({{ $allCommentscount->count() }})</span>
                                        </a>
                                    </div>
                                </div>

                            </div>





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
                                        href="{{ route('authorPage', $bloggerInfo->first()->rel_to_users->id) }}">{{ $bloggerInfo->first()->rel_to_users->name }}</a>
                                </li>
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


                        @auth('generaluserLogin')
                            <div class=" likeDislike" id="likesecId">


                                <div class="d-flex flex-row bd-highlight ">

                                    <form action="{{ route('likeCount') }}" method="post">
                                        @csrf
                                        <div class="bd-highlight like"><span><button
                                                    class="likeBtn btn btn-{{ App\Models\likeDislikeModel::where('post_id', $bloggerInfo->first()->slug)->where('user_id', Auth::guard('generaluserLogin')->id())->exists()? 'success': 'light' }}"
                                                    type="submit"
                                                    data-parent="{{ $bloggerInfo->first()->slug }}">{{ App\Models\likeDislikeModel::where('post_id', $bloggerInfo->first()->slug)->where('user_id', Auth::guard('generaluserLogin')->id())->exists()? 'Liked': 'Like' }}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                        fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                                    </svg></button></span></div>


                                        <input type="hidden" class="likeHiddenInput" name="post_id_like">
                                        <input type="hidden" name="post_id_like_another" value="{{$bloggerInfo->first()->id}}">

                                    </form>

                                    <form action="{{ route('likeRemove') }}" method="post">
                                        @csrf

                                        <div class="bd-highlight dislike"><span><button type="submit"
                                                    data-parent="{{ $bloggerInfo->first()->slug }}"
                                                    class="btn btn-{{ App\Models\likeDislikeModel::where('post_id', $bloggerInfo->first()->slug)->where('user_id', Auth::guard('generaluserLogin')->id())->exists()? 'danger': 'light' }} disLikeBtn">Dislike
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                        fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                                                    </svg></button></span></div>

                                                    @if (session("dislike"))

                                                    <p class="text-danger mt-2 mb-2">{{session("dislike")}}</p>
                                                        
                                                    @endif

                                        <input type="hidden" class="dislikeHiddenInput" name="post_id_dislike">

                                    </form>

                                </div>


                                @if (session('liked'))
                                    <p class="mt-2 mb-2 text-danger">{{ session('liked') }}</p>
                                @endif



                            </div>
                        @endauth

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
                            <h4>{{ $allCommentscount->count() }}
                                {{ $allCommentscount->count() > 1 ? 'Comments' : 'Comment' }}
                            </h4>

                            <!--comment1-->


                            @foreach ($allComments as $Comments)
                                <ul class="comments">
                                    <li class="comment-item pt-0">
                                        @if ($Comments->rel_to_genUsers->photo == null)
                                            <img class="d-block"
                                                src="{{ Avatar::create($Comments->rel_to_genUsers->name)->toBase64() }}" />
                                        @else
                                            <a href=""><img class="d-block"
                                                    src="{{ asset('uploads/genUserProfile') }}/{{ $Comments->rel_to_genUsers->photo }}"
                                                    alt="" /></a>
                                        @endif
                                        <div class="content">
                                            <div class="meta">
                                                <ul class="list-inline">
                                                    <li><a href="#">{{ $Comments->rel_to_genUsers->name }}</a> </li>
                                                    <li class="slash"></li>
                                                    <li>{{ $Comments->created_at->diffForHumans() }}</li>
                                                </ul>
                                            </div>
                                            <p><span><svg class="myquoteIcon" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-quote" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                                    </svg></span> {{ $Comments->commment }}
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
                                            @elseif ($reply->rel_to_genUsers->name == Auth::guard('generaluserLogin')->user()->name)
                                                <a href=""><img class="d-block"
                                                        src="{{ asset('uploads/genUserProfile') }}/{{ Auth::guard('generaluserLogin')->user()->photo }}"
                                                        alt="" /></a>
                                            @else
                                                <a href=""><img class="d-block"
                                                        src="{{ asset('uploads/genUserProfile') }}/{{ $reply->rel_to_genUsers->photo }}"
                                                        alt="" /></a>
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
                                                <p><span><svg class="myquoteIcon" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-quote" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                                        </svg></span> {{ $reply->commment }}
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
                                    <h4>Leave a Comment</h4>
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


    <script>
        $('.likeBtn').click(function() {
            var post_id = $(this).attr('data-parent');

            $('.likeHiddenInput').attr('value', post_id);
        });



        $('.disLikeBtn').click(function() {
            var post_id_dislike = $(this).attr('data-parent');

            $('.dislikeHiddenInput').attr('value', post_id_dislike);
        });
    </script>
@endsection
