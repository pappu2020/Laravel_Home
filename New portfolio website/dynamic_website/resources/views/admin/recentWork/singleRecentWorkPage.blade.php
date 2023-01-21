@extends('layouts.portfolioLayout')

<style>
    .recentDiv {
        margin-left: 100px;
        margin-bottom: 50px
    }

    @media (min-width: 300px) and (max-width: 575px) {
        .recentDiv {
            margin-left: 0px;
            margin-bottom: 20px
        }


    }

    .recentImage {
        width: 600px;
        height: 300px;
    }

    @media (min-width: 300px) and (max-width: 575px) {
        .recentImage {
            width: 360px;
            height: 300px;
            margin-left: 22px;
        }


    }
</style>

@section('content')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="breadcrumb-content text-center">
                            <h2>Portfolio Information</h2>
                            <h4>{{ $recentImage->first()->rel_to_recentWork->recentTitle }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- portfolio-details-area -->
        <div class="row">

            @foreach ($recentImage as $getrecentImage)
                <div class="col-lg-5 col-sm-12 recentDiv">

                    <img class="recentImage" src="{{ asset('uploads/extraRecentWorkImages') }}/{{ $getrecentImage->images }}"
                        alt="">

                </div>
            @endforeach



        </div>
        <!-- portfolio-details-area-end -->


    </main>

    <!-- main-area-end -->
@endsection
