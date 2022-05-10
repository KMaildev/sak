@extends('layouts.kanji')
@section('content')
    <section class="bg-lighter bg-theme-colored-gradient">
        <br><br>
        <div class="container-fluid pt-0 pb-0">
            <div class="section-content">
                <div class="row equal-height">
                    <div class="col-xs-12 col-sm-12 col-md-12 pr-30 pl-30">
                        <div class="row">

                            <div class="col-sm-6 col-lg-2 col-md-2">
                                <div class="icon-box-new iconsq text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40"
                                    style="background-color: #00a6ac; border: 1px solid #cccccc;">
                                    <img src="{{ asset('data/kanji/certificate.png') }}" alt=""
                                        style="background-color: #00a6ac">
                                    <h4 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-white">
                                        Group Lessons
                                    </h4>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-2 col-md-2">
                                <div class="icon-box-new text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40"
                                    style="background-color: #f38e1b; border: 1px solid #cccccc;">
                                    <img src="{{ asset('data/kanji/lg-corporate.png') }}" alt=""
                                        style="background-color: #f38e1b">
                                    <h4 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-white">
                                        Corporate Training
                                    </h4>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-2 col-md-2">
                                <div class="icon-box-new text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40"
                                    style="background-color: #dc1837; border: 1px solid #cccccc;">
                                    <img src="{{ asset('data/kanji/lg-online-lessons.png') }}" alt=""
                                        style="background-color: #dc1837">
                                    <h4 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-white">
                                        Video Contents
                                    </h4>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-2 col-md-2">
                                <div class="icon-box-new text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40"
                                    style="background-color: #b95fa3; border: 1px solid #cccccc;">
                                    <img src="{{ asset('data/kanji/lg-skills.png') }}" alt=""
                                        style="background-color: #b95fa3">
                                    <h4 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-white">
                                        CEFR Guideline
                                    </h4>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-2 col-md-2">
                                <div class="icon-box-new text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40"
                                    style="background-color: #2e95bb; border: 1px solid #cccccc;">
                                    <img src="{{ asset('data/kanji/lg-lists.png') }}" alt=""
                                        style="background-color: #2e95bb">
                                    <h4 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-white">
                                        Language Exams
                                    </h4>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-2 col-md-2">
                                <div class="icon-box-new text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40"
                                    style="background-color: #6249ab; border: 1px solid #cccccc;">
                                    <img src="{{ asset('data/kanji/lg-location.png') }}" alt=""
                                        style="background-color: #6249ab">
                                    <h4 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-white">
                                        Get In Touch
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
