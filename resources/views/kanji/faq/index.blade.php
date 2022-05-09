@extends('layouts.kanji')
@section('title', 'Faq')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('data/banner/kanji.jpeg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">FAQ</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('kanji_training.index') }}">Home</a>
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
        <div class="container pt-sm-70">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="panel-group accordion-icon-right" id="accordion" role="tablist"
                            aria-multiselectable="true">
                            @foreach ($faqs as $key => $faq)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne_{{ $faq->id }}">
                                        <h4 class="panel-title font-16">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion_{{ $faq->id }}"
                                                href="#collapseOne_{{ $faq->id }}" aria-expanded="false"
                                                aria-controls="collapseOne_{{ $faq->id }}">
                                                {{ $faq->question_eng }}
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapseOne_{{ $faq->id }}"
                                        class="panel-collapse collapse {{ $key === 0 ? 'in' : '' }}" role="tabpanel"
                                        aria-labelledby="headingOne_{{ $faq->id }}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel-body p-0 mt-10" style="margin: 10px;">
                                                    {{ $faq->answer_eng }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
