@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg2.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">FAQ</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                FAQ
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <div class="list-group">
                        @foreach ($faqs as $key => $faq)
                            <a href="#{{ $faq->id }}" class="list-group-item smooth-scroll-to-target"
                                style="background-color: #f5f5f5">
                                {{ $faq->question_eng }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-10 col-md-push-1">
                    @foreach ($faqs as $key => $faq)
                        <div id="{{ $faq->id }}" class="mb-50">
                            <h3>
                                {{ $faq->question_eng }}
                            </h3>
                            <hr>
                            <p class="mb-20">
                                {{ $faq->answer_eng }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
