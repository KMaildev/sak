@extends('layouts.app')
@section('title', 'CAREER ADVICE')
@section('content')

    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg2.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">
                            CAREER ADVICE
                        </h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                {{ $carrer_advice->title_eng }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="{{ $carrer_advice->photo }}" alt="" class="img-responsive img-fullwidth"
                                        style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                    <div class="media-body">
                                        <div class="event-content pull-left flip">
                                            <h3 class="entry-title text-black text-uppercase pt-0 mt-0">
                                                {{ $carrer_advice->title_eng }}
                                            </h3>
                                            <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                <i class="fa fa-calendar mr-5 text-theme-colored"></i>
                                                {{ $carrer_advice->upload_date }}
                                            </span>

                                            <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                <i class="fa fa-users mr-5 text-theme-colored"></i>
                                                By SAK
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-15">
                                    {{ $carrer_advice->description_eng }}
                                </p>
                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                                data-bg-color="#3A5795" target="_blank">
                                                <i class="fa fa-facebook text-white"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}"
                                                data-bg-color="#55ACEE">
                                                <i class="fa fa-twitter text-white"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">

                        <div class="widget">
                            <div class="owl-item">
                                <div class="item">
                                    <a href="{{ route('carrer_advice.index') }}">
                                        <div class="newcomer">
                                            <img src="{{ asset('data/career_advice.jpg') }}" alt="">
                                            <div class="newcomer-overlay">
                                                <div class="newcomer-inner">
                                                    <a class="btn btn-flat btn-theme-colored2 font-weight-600 flip mt-10"
                                                        href="{{ route('carrer_advice.index') }}">
                                                        Career Advice
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h5 class="widget-title line-bottom">
                                Related content
                            </h5>
                            <div class="latest-posts">
                                @foreach ($carrer_advice_posts as $carrer_advice)
                                    <article class="post media-post clearfix pb-0 mb-10" style="border: 1px solid black;">
                                        <a class="post-thumb"
                                            href="{{ route('carrer_advice.show', $carrer_advice->id) }}">
                                            <img src="{{ $carrer_advice->photo }}" alt=""
                                                style="width: 70px; height: 70px; background-size: center; object-fit: cover;">
                                        </a>
                                        <div class="post-right">
                                            <h5 class="post-title mt-0">
                                                <a href="{{ route('carrer_advice.show', $carrer_advice->id) }}">
                                                    {{ $carrer_advice->title_eng }}
                                                </a>
                                            </h5>
                                            <p style="color: black">
                                                {{ Str::limit($carrer_advice->description_eng, 40) }}
                                            </p>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
