@extends('layouts.app')
@section('title', 'JOBS IN OVERSEAS')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg2.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Jobs in Overseas</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                Jobs Available In {{ $country->country }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .white-color {
            color: #ffffff;
        }

        .theme-bg {
            background-color: #0050d8;
        }

        .icon-50 i.number {
            font-style: normal;
        }

        .icon-50 i {
            line-height: 50px;
        }

        .border-radius-50 {
            border-radius: 50%;
        }

        .icon-50 {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 21px;
        }

        .box-shadow-only-hover:hover {
            box-shadow: 0 1.5rem 4rem rgba(22, 28, 45, 0.1);
        }

        .hover-top {
            position: relative;
            top: 0;
        }

        .border-all-1 {
            border: 1px solid;
        }

    </style>

    <section style="background-color: #fafafa;">
        <div class="container">
            <div class="section-content">
                <div class="row">

                    @foreach ($jobs as $key => $job)
                        <div class="col-sm-12 col-lg-4 col-md-4">
                            <div class="box-shadow-only-hover hover-top border-all-1  mb-20"
                                style="background-color: #ffffff;">
                                <div class="event media mt-0 no-bg no-border" style="padding-top: 12px;">
                                    <div class="media-left text-center flip pl-10">
                                        <div class="icon-50 theme-bg white-color border-radius-50 d-inline-block"
                                            style="background-color:#484c9e;">
                                            <img src="{{ asset('data/job-search.png') }}"
                                                alt="Saint Arkar Company Limited">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                                            <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5">
                                                <a href="#">
                                                    {{ $job->job_title }}
                                                </a>
                                            </h4>
                                            <span class="font-12">
                                                <i class="fa fa-map-marker mr-5 text-theme-colored"></i>
                                                Job in {{ $country->country }}
                                            </span>

                                            <p class="mb-5" style="padding-left: 20px;">
                                                <a href="{{ route('cv.index') }}" class="btn btn-success btn-sm"
                                                    style="font-weight:bold;">
                                                    Apply Now
                                                </a>

                                                <a href="mailto:info@recruitmentmyanmarsak.com"
                                                    class="btn btn-warning btn-sm" style="font-weight:bold;">
                                                    Send Email
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endsection

    @section('script')
    @endsection
