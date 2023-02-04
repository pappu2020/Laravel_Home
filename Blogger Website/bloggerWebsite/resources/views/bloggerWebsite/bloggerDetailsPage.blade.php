@extends('layouts.bloggerWebsiteLayout')
<style>
    .authorBadge{
        margin-left: 15px;
        margin-top: 3px;
        color: white;
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
                                        href="author.html">{{ $bloggerInfo->first()->rel_to_users->name }}</a></li>
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

                        <!--post-single-author-->
                        <div class="post-single-author ">
                            <div class="authors-info">
                                <div class="image">
                                    <a href="author.html" class="image">
                                        @if ($bloggerInfo->first()->rel_to_users->photo == null)
                                            <img width="150px" height="150px" class="mx-auto d-block"
                                                src="{{ Avatar::create($bloggerInfo->first()->rel_to_users->name)->toBase64() }}" />
                                        @else
                                            <img id="profileImageView"
                                                src="{{ asset('uploads/userProfile') }}/{{ $bloggerInfo->first()->rel_to_users->photo }}"
                                                width="150px" height="150px" alt="" />
                                        @endif
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="{{route("authorPage",$bloggerInfo->first()->rel_to_users->id)}}"><h4>{{ $bloggerInfo->first()->rel_to_users->name }}</h4></a>
                                    <div class="listAuthorInfo">
                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Account Opened: </div>
                                                   
                                                </div>
                                                <span class="badge bg-primary rounded-pill authorBadge">{{ $bloggerInfo->first()->created_at->format("d-m-Y") }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Total Blogs: </div>
                                                    
                                                </div>
                                                <span class="badge bg-primary rounded-pill text-light">{{App\Models\bloggerPostModel::where("author_id",$bloggerInfo->first()->author_id)->count()}}</span>
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
                            <h4>3 Comments</h4>
                            <ul class="comments">
                                <!--comment1-->
                                <li class="comment-item pt-0">
                                    <img src="assets/img/other/user1.jpg" alt="">
                                    <div class="content">
                                        <div class="meta">
                                            <ul class="list-inline">
                                                <li><a href="#">Nirmaine Nicole</a> </li>
                                                <li class="slash"></li>
                                                <li>3 Months Ago</li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at
                                            doloremque adipisci eum placeat
                                            quod non fugiat aliquid sit similique!
                                        </p>
                                        <a href="#" class="btn-reply"><i class="las la-reply"></i> Reply</a>
                                    </div>

                                </li>
                                <!--comment2-->
                                <li class="comment-item">
                                    <img src="assets/img/other/use2.jpg" alt="">
                                    <div class="content">
                                        <div class="meta">
                                            <ul class="list-inline">
                                                <li><a href="#">adam smith</a> </li>
                                                <li class="slash"></li>
                                                <li>3 Months Ago</li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at
                                            doloremque adipisci eum placeat
                                            quod non fugiat aliquid sit similique!
                                        </p>
                                        <a href="#" class="btn-reply"><i class="las la-reply"></i> Reply</a>
                                    </div>
                                </li>
                                <!--comment3-->
                                <li class="comment-item">
                                    <img src="assets/img/other/user3.jpg" alt="">
                                    <div class="content">
                                        <div class="meta">
                                            <ul class="list-inline">
                                                <li><a href="#">Emma david</a> </li>
                                                <li class="slash"></li>
                                                <li>3 Months Ago</li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at
                                            doloremque adipisci eum placeat
                                            quod non fugiat aliquid sit similique!
                                        </p>
                                        <a href="#" class="btn-reply"><i class="las la-reply"></i> Reply</a>
                                    </div>
                                </li>

                            </ul>
                            <!--Leave-comments-->
                            <div class="comments-form">
                                <h4>Leave a Reply</h4>
                                <!--form-->
                                <form class="form " action="#" method="POST" id="main_contact_form">
                                    <p>Your email adress will not be published ,Requied fileds are marked*.</p>
                                    <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Name*" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control"
                                                    placeholder="Email*" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message*"
                                                    required="required"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="mb-20">
                                                <input name="name" type="checkbox" value="1"
                                                    required="required">
                                                <label for="name"><span>save my name , email and website in this
                                                        browser for the next time I comment.</span></label>
                                            </div>

                                            <button type="submit" name="submit" class="btn-custom">
                                                Send Comment
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!--/-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
