@extends('layouts.bloggerWebsiteLayout')

<style>
    .authorBadge {
        margin-left: 15px;
        margin-top: 3px;
        color: white;
    }
</style>
@section('content')
    <div class="section-heading ">
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title">
                            <h1>Beloved Authors <span><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg></span></h1>
                            <p class="links"><a href="{{ route('homePage') }}">Home <i class="las la-angle-right"></i></a>
                                Authors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        @foreach ($bloggerInformation as $bloggerInfo)
            <div class="col-lg-4 card">

                <div class="card-body">

                    <div class="authors-info">
                        <div class="image">
                            <a href="author.html" class="image">
                                @if ($bloggerInfo->rel_to_users->photo == null)
                                    <img width="150px" height="150px" class="mx-auto d-block"
                                        src="{{ Avatar::create($bloggerInfo->rel_to_users->name)->toBase64() }}" />
                                @else
                                    <a href="{{ route('authorPage', $bloggerInfo->rel_to_users->id) }}"><img
                                            id="profileImageView"
                                            src="{{ asset('uploads/userProfile') }}/{{ $bloggerInfo->rel_to_users->photo }}"
                                            width="150px" height="150px" alt="" /></a>
                                @endif
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ route('authorPage', $bloggerInfo->rel_to_users->id) }}">
                                <h4>{{ $bloggerInfo->rel_to_users->name }}</h4>
                            </a>
                            <div class="listAuthorInfo">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Account Opened: </div>

                                        </div>
                                        <span
                                            class="badge bg-primary rounded-pill authorBadge">{{ App\Models\User::where('id', $bloggerInfo->author_id)->first()->created_at->format('d-m-Y') }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Total Blogs: </div>

                                        </div>
                                        <span
                                            class="badge bg-primary rounded-pill text-light">{{ App\Models\bloggerPostModel::where('author_id', $bloggerInfo->author_id)->count() }}</span>
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

                </div>

            </div>
        @endforeach


    </div>
@endsection
