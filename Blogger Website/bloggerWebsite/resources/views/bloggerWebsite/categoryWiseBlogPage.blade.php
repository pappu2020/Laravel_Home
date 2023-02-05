@extends('layouts.bloggerWebsiteLayout')

<style>
    .nodata {
        margin: auto;
        padding: 50px;
        color: red;
    }
</style>

@section('content')
    <div class="section-heading ">
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title">
                            <h1>{{ $categoryInfo->categoryName}}</h1>
                            <p class="links"><a href="index.html">Home <i class="las la-angle-right"></i></a> Blog</p>
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






                    @forelse ($AllcategoryWiseBlogs as $categoryWiseBlogs)
                        <div class="post-list post-list-style2">
                            <div class="post-list-image">
                                <a href="post-single.html">
                                    <img src="{{ asset('uploads/blogerPost') }}/{{ $categoryWiseBlogs->featured_img }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="post-list-content">
                                <h3 class="entry-title">
                                    <a href="{{route("bloggerDetailsPage",$categoryWiseBlogs->id)}}">{{ $categoryWiseBlogs->title }}</a>
                                </h3>
                                <ul class="entry-meta">
                                    <li class="post-author-img"><img
                                            src="{{ asset('uploads/userProfile') }}/{{ $categoryWiseBlogs->rel_to_users->photo }}"
                                            alt=""></li>
                                    <li class="post-author"> <a
                                            href="{{route("authorPage", $categoryWiseBlogs->rel_to_users->id)}}">{{ $categoryWiseBlogs->rel_to_users->name }}</a></li>
                                    <li class="entry-cat"> <a href="{{route("categoryWiseBlogPage",$AllcategoryWiseBlogs->first()->rel_to_category->id)}}" class="category-style-1 "> <span
                                                class="line"></span>
                                            {{ $AllcategoryWiseBlogs->first()->rel_to_category->categoryName }}</a></li>
                                    <li class="post-date"> <span class="line"></span>
                                        {{ $categoryWiseBlogs->created_at->format('d-m-Y') }}</li>
                                </ul>
                                <div class="post-exerpt">
                                    <p>{{ $categoryWiseBlogs->short_desp }}</p>
                                </div>
                                <div class="post-btn">
                                    <a href="{{route("bloggerDetailsPage",$categoryWiseBlogs->id)}}" class="btn-read-more">Continue Reading <i
                                            class="las la-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="nodata">
                            <h2>No Blog Avaliable</h2>
                        </div>
                    @endforelse







                </div>
            </div>
        </div>
    </section>


    <!--pagination-->
    {{ $AllcategoryWiseBlogs->links('vendor.pagination.custompagination') }}
@endsection
