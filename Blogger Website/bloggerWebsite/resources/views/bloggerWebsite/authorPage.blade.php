@extends('layouts.bloggerWebsiteLayout')

<style>
    .authorBadge {
        margin-left: 15px;
        margin-top: 3px;
        color: white;
    }
</style>

@section('content')
    <!--author-->
    <section class="authors">
        <div class="container-fluid">
            <div class="row">
                <!--author-image-->
                <div class="col-lg-12 col-md-12 ">
                    <div class="authors-info">
                        <div class="image">
                            <a href="author.html" class="image">
                                @if ($bloggerInfo->first()->rel_to_users->photo == null)
                                    <img width="150px" height="150px" class="mx-auto d-block"
                                        src="{{ Avatar::create($bloggerInfo->first()->rel_to_users->name)->toBase64() }}" />
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
                                            class="badge bg-primary rounded-pill authorBadge">{{ App\Models\User::where("id",$bloggerInfo->first()->author_id)->first()->created_at->format("d-m-Y") }}</span>
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
                            <div class="social-media mt-4">
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
                    <!--/-->
                </div>
            </div>
        </div>
    </section>

    <!-- blog-author-->
    <section class="blog-author mt-30">
        <div class="container-fluid">
            <div class="row">
                <!--content-->
                <div class="col-lg-8 oredoo-content">
                    <div class="theiaStickySidebar">
                        <!--post1-->



                        @forelse ($bloggerInfo as $blogger)
                            <div class="post-list post-list-style4 pt-0">
                                <div class="post-list-image">
                                    <a href="{{route("bloggerDetailsPage",$blogger->slug )}}">
                                        <img src="{{ asset('uploads/blogerPost') }}/{{ $blogger->featured_img }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="post-list-content">
                                    <ul class="entry-meta">
                                        <li class="entry-cat">
                                            <a href="{{route("categoryWiseBlogPage",$blogger->rel_to_category->id)}}"
                                                class="category-style-1">{{ $blogger->rel_to_category->categoryName }}</a>
                                        </li>
                                        <li class="post-date"> <span class="line"></span>
                                            {{ $blogger->created_at->format('d-m-Y') }}</li>
                                    </ul>
                                    <h5 class="entry-title">
                                        <a
                                            href="{{ route('bloggerDetailsPage', $blogger->slug) }}">{{ $blogger->title }}</a>
                                    </h5>
                                    <p>{{ $blogger->short_desp }}</p>
                                    <div class="post-btn">
                                        <a href="{{ route('bloggerDetailsPage', $blogger->slug) }}"
                                            class="btn-read-more">Continue Reading <i
                                                class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        @empty
                        @endforelse


                        <!--/-->
                        <!--pagination-->

                         {{$bloggerInfo->links("vendor.pagination.custompagination")}}
                        


                    </div>
                </div>
                <!--/-->


                <!--Sidebar-->
                <div class="col-lg-4 oredoo-sidebar">
                    <div class="theiaStickySidebar">
                        <div class="sidebar">
                            <!--search-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h5>Search</h5>
                                </div>
                                <div class=" widget-search">
                                    <form action="">
                                        <input type="search" id="search_input" value="{{ @$_GET['q'] }}" placeholder="Search ....">
                                        <button type="button" class="btn-submit"  id="search_btn"><i class="las la-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!--categories-->
                            <div class="widget ">
                                <div class="widget-title">
                                    <h5>Categories</h5>
                                </div>
                                <div class="widget-categories">

                                    @foreach ($allCategory as $Category)
                                        <a class="category-item" href="{{ route('categoryWiseBlogPage', $Category->id) }}">
                                            <div class="image">
                                                <img width="200px" height="200px"
                                                    src="{{ asset('uploads/category') }}/{{ $Category->categoryImg }}"
                                                    alt="">
                                            </div>

                                            <p>{{ $Category->categoryName }} </p>
                                        </a>
                                    @endforeach


                                </div>
                            </div>

                            <!--newslatter-->
                            <div class="widget widget-newsletter">
                                <h5>Subscribe To OurNewsletter</h5>
                                <p>No spam, notifications only about new products, updates.</p>
                                <form action="#" class="newslettre-form">
                                    <div class="form-flex">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email Adress"
                                                required="required">
                                        </div>
                                        <button class="btn-custom" type="submit"> Subscribe now</button>
                                    </div>
                                </form>
                            </div>

                            <!--stay connected-->
                            <div class="widget ">
                                <div class="widget-title">
                                    <h5>Stay connected</h5>
                                </div>

                                <div class="widget-stay-connected">
                                    <div class="list">
                                        <div class="item color-facebook">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <p>Facebook</p>
                                        </div>

                                        <div class="item color-instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <p>instagram</p>
                                        </div>

                                        <div class="item color-twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <p>twitter</p>
                                        </div>

                                        <div class="item color-youtube">
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                            <p>Youtube</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--Tags-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h5>Tags</h5>
                                </div>
                                <div class="tags">
                                    <ul class="list-inline">

                                        @foreach ($allTag as $Tag)
                                            <li>
                                                <a href="#">{{ $Tag->tagName }}</a>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>

                            <!--popular-posts-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h5>popular Posts</h5>
                                </div>

                                <ul class="widget-popular-posts">
                                    <!--post1-->
                                    <li class="small-post">
                                        <div class="small-post-image">
                                            <a href="post-single.html">
                                                <img src="assets/img/blog/1.jpg" alt="">
                                                <small class="nb">1</small>
                                            </a>
                                        </div>
                                        <div class="small-post-content">
                                            <p>
                                                <a href="post-single.html">Everything is designed. Few things are designed
                                                    well.</a>
                                            </p>
                                            <small> <span class="slash"></span>3 mounth ago</small>
                                        </div>
                                    </li>

                                    <!--post2-->
                                    <li class="small-post">
                                        <div class="small-post-image">
                                            <a href="post-single.html">
                                                <img src="assets/img/blog/5.jpg" alt="">
                                                <small class="nb">2</small>
                                            </a>
                                        </div>
                                        <div class="small-post-content">
                                            <p>
                                                <a href="post-single.html">Brand yourself for the career you want, not the
                                                    job you </a>
                                            </p>
                                            <small> <span class="slash"></span>3 mounth ago</small>
                                        </div>
                                    </li>

                                    <!--post3-->
                                    <li class="small-post">
                                        <div class="small-post-image">
                                            <a href="post-single.html">
                                                <img src="assets/img/blog/13.jpg" alt="">
                                                <small class="nb">3</small>
                                            </a>
                                        </div>
                                        <div class="small-post-content">
                                            <p>
                                                <a href="post-single.html">It’s easier to ask forgiveness than it is to get
                                                    permission.</a>
                                            </p>
                                            <small> <span class="slash"></span>3 mounth ago</small>

                                        </div>
                                    </li>
                                    <!--post4-->
                                    <li class="small-post">
                                        <div class="small-post-image">
                                            <a href="post-single.html">
                                                <img src="assets/img/blog/16.jpg" alt="">
                                                <small class="nb">4</small>
                                            </a>
                                        </div>
                                        <div class="small-post-content">
                                            <p>
                                                <a href="post-single.html">All happiness depends on a leisurely
                                                    breakfast</a>
                                            </p>
                                            <small> <span class="slash"></span>3 mounth ago</small>
                                        </div>
                                    </li>
                                    <!--/-->
                                </ul>
                            </div>

                            <!--/-->
                        </div>
                    </div>
                </div>
                <!--/-->
            </div>
        </div>
    </section>
@endsection

{{-- <script>
    $("#search_btn_author").click(function() {
        var searchValue = $("#search_input_author").val();

        var link = "{{ route('searchpage') }}" + "?q=" + searchValue;
        window.location.href = link;
    });
</script> --}}


