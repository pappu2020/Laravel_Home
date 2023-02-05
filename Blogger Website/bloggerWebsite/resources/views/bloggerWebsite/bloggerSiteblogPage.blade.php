@extends('layouts.bloggerWebsiteLayout')



@section('content')
    <!--section-heading-->
    <div class="section-heading ">
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title">
                            <h1>All Blogs</h1>
                            <p class="links"><a href="{{route("homePage")}}">Home <i class="las la-angle-right"></i></a> Blog</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Blog Layout-2-->
    <section class="blog-layout-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--post 1-->

                    @foreach ($bloggerInformation as $blogger)
                        <div class="post-list post-list-style2">
                            <div class="post-list-image">
                                <a href="post-single.html">
                                    <img src="{{ asset('uploads/blogerPost') }}/{{ $blogger->featured_img }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="post-list-content">
                                <h3 class="entry-title">
                                    <a href="{{ route('bloggerDetailsPage', $blogger->slug) }}">{{ $blogger->title }}</a>
                                </h3>
                                <ul class="entry-meta">
                                    <li class="post-author-img">
                                        @if ($blogger->rel_to_users->photo == null)
                                            <img width="150px" height="150px" class="mx-auto d-block"
                                                src="{{ Avatar::create($blogger->rel_to_users->name)->toBase64() }}" />
                                        @else
                                            <a href="{{ route('authorPage', $blogger->rel_to_users->id) }}"><img
                                                    id="profileImageView"
                                                    src="{{ asset('uploads/userProfile') }}/{{ $blogger->rel_to_users->photo }}"
                                                    width="150px" height="150px" alt="" /></a>
                                        @endif
                                    </li>
                                    <li class="post-author"> <a href="{{ route('authorPage', $blogger->rel_to_users->id) }}">{{ $blogger->rel_to_users->name }}</a></li>
                                    <li class="entry-cat"> <a href="{{route("categoryWiseBlogPage",$blogger->rel_to_category->id)}}" class="category-style-1 "> <span
                                                class="line"></span> {{ $blogger->rel_to_category->categoryName }}</a>
                                    </li>
                                    <li class="post-date"> <span class="line"></span> {{ $blogger->created_at->format('d-m-Y') }}</li>
                                </ul>
                                <div class="post-exerpt">
                                    <p>{{ $blogger->short_desp }}
                                    </p>
                                </div>
                                <div class="post-btn">
                                    <a href="{{ route('bloggerDetailsPage', $blogger->slug) }}" class="btn-read-more">Continue Reading <i
                                            class="las la-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </section>
    


    <!--pagination-->
    <div class="pagination">
        <div class="container-fluid">
            <div class="pagination-area">
                <div class="row">
                    <div class="col-lg-12">
                         {{ $bloggerInformation->links('vendor.pagination.custompagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
