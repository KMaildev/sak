@extends('layouts.app')
@section('title', 'Our Key Members')
@section('content')

    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Meet Our Team</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                Meet Our Team
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pb-sm-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1">Meet Our <span class="text-theme-colored3">Team</span></h2>
                        <p>
                            Our ability to deliver customer’s satisfactory and excellent quality of service starts from our
                            vibrant, dedicated and experienced team of individuals. Each of us has diverse experience and
                            background, and together, we serve our customer better and bring the successful growth of our
                            company in the employment industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content text-center">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-sm-6 col-md-3 mb-sm-30 mb-30">
                            <div class="team-block bg-light pt-10 pb-15">
                                <div class="team-thumb">
                                    <img class="img-fullwidth" src="{{ $team->photo }}" alt="Saint Arkar Company Limited"
                                        style="width: 100%; height: 250px; object-fit: cover; background-size: contain; background-position: center;">
                                </div>
                                <div class="info">
                                    <div class="pt-10 pb-10" style="background-color: #ea5360;">
                                        <h4 class="mt-0 mb-0 text-white">
                                            {{ $team->name }}
                                        </h4>
                                        <h6 class="mt-0 mb-0 text-white">
                                            {{ $team->position }}
                                        </h6>
                                    </div>
                                    <ul class="styled-icons icon-theme-colored4 icon-circled icon-dark icon-sm mt-15 mb-0">
                                        <li>
                                            <a href="{{ $team->facebook_link }}" target="_blank" data-bg-color="#0c355a">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $team->twitter_link }}" data-bg-color="#0c355a">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $team->whats_app }}" data-bg-color="#0c355a">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
