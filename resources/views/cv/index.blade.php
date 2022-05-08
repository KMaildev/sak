@extends('layouts.app')
@section('title', 'JOBS IN OVERSEAS')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg2.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">
                            SHARE YOUR CAREER GOALS WITH US
                        </h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                Submit Your CV
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about">
        <div class="container pb-90 pb-sm-90">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-9 col-md-9 col-lg-9">

                        <div class="bg-lightest border-1px p-30 mb-0">
                            <h3 class="text-theme-colored mt-0 pt-5">
                                <span>Talk to our</span> specialist consultants
                            </h3>
                            <span>
                                Please fill out the application form and submit your CV.
                            </span>
                            <hr>
                            <p>
                                After we have received your application and CV, one of our specialist career consultants
                                will contact you when they are able to introduce you for positions that fit your skills and
                                experience.
                            </p>

                            @include('layouts.shared.job_enquirie_form')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
@endsection
