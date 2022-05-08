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
                                CAREER ADVICE
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row multi-row-clearfix">
                <div class="blog-posts">
                    @foreach ($carrer_advices as $carrer_advice)
                        <div class="col-md-4">
                            <a href="{{ route('carrer_advice.show', $carrer_advice->id) }}">
                                <article class="post clearfix mb-30 bg-lighter">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="{{ $carrer_advice->photo }}" alt=""
                                                class="img-responsive img-fullwidth"
                                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="entry-content border-1px p-20 pr-10">
                                        <div class="entry-meta media mt-0 no-bg no-border">
                                            <div class="media-body">
                                                <div class="event-content pull-left flip">
                                                    <h4 class="entry-title text-white text-uppercase m-0 mt-5">
                                                        <a href="{{ route('carrer_advice.show', $carrer_advice->id) }}">
                                                            {{ $carrer_advice->title_eng }}
                                                        </a>
                                                    </h4>
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
                                        <p class="mt-10">
                                            {{ Str::limit($carrer_advice->description_eng, 100) }}
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
