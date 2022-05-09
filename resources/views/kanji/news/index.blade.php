@extends('layouts.kanji')
@section('title', 'News')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('data/banner/kanji.jpeg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">News</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('kanji_training.index') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                News
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row col-md-offset-2">

                <div class="col-md-9">
                    <div class="blog-posts">
                        <div class="col-md-12">
                            <div class="row list-dashed">
                                @foreach ($news as $new)
                                    <a href="{{ route('kanji_news.show', $new->id) }}">
                                        <article class="post clearfix mb-30 pb-30">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb">
                                                    <img src="{{ $new->photo }}" alt=""
                                                        class="img-responsive img-fullwidth"
                                                        style="width: 100%; height: 250px; background-size: center; object-fit: cover;">
                                                </div>
                                            </div>
                                            <div class="entry-content border-1px p-20 pr-10">
                                                <div class="entry-meta media mt-0 no-bg no-border">
                                                    <div class="media-body">
                                                        <div class="event-content flip">
                                                            <h4 class="entry-title text-white text-uppercase m-0 mt-5">
                                                                <a href="{{ route('kanji_news.show', $new->id) }}">
                                                                    {{ $new->title_eng }}
                                                                </a>
                                                            </h4>
                                                            <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                                <i class="fa fa-calendar mr-5 text-theme-colored"></i>
                                                                {{ $new->upload_date }}
                                                            </span>

                                                            <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                                <i class="fa fa-users mr-5 text-theme-colored"></i>
                                                                By Admin
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-10">
                                                    {{ Str::limit($new->description_eng, 100) }}
                                                </p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </article>
                                    </a>
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
