@extends('layouts.app')
@section('title', 'Vision / Mission / Values')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Vision / Mission / Values</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                Vision / Mission / Values
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fulid mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-12 col-lg-12"
                    style="box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="blog-posts single-post">
                            <article class="post clearfix mb-0">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <br>
                                        <img src="{{ asset('data/vision2.jpg') }}" alt=""
                                            class="img-responsive img-fullwidth" style="background-color: #1359a1;">
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                        <div class="media-body pl-15">
                                            <div class="event-content flip">
                                                <center>
                                                    <h2 class="entry-title text-black text-uppercase pt-0 mt-0"
                                                        style="text-shadow: 2px 2px gray;">
                                                        Our Vision
                                                    </h2>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <p class=""
                                        style="color: #1359a1; font-size: 17px; font-weight: bold; text-align: justify;">
                                        Our vision is to become the employers’ preferred Recruitment Agency of choice
                                        based
                                        on
                                        the extent and quality of our services providing transparent and accountable
                                        supply
                                        of
                                        suitable human resources to the stakeholders, creating a positive impact ,
                                        strengthen
                                        the ethical and sustainable global supply chain.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-lg-12"
                    style="box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="blog-posts single-post">
                            <article class="post clearfix mb-0">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <br><br>
                                        <img src="{{ asset('data/mission.png') }}" alt=""
                                            class="img-responsive img-fullwidth" style="background-color: #9cd0f4;">
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                        <div class="media-body pl-15">
                                            <div class="event-content flip">
                                                <center>
                                                    <h2 class="entry-title text-black text-uppercase pt-0 mt-0"
                                                        style="text-shadow: 2px 2px gray;">
                                                        Our Mission
                                                    </h2>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <p class=""
                                        style="color: #1359a1; font-size: 17px; font-weight: bold; text-align: justify;">
                                        Our mission is to support employers to succeed business operations through their
                                        excellent workforce; to empower our candidates to achieve their career prospects;
                                        and to ensure ethical recruitment process is in place throughout the supply chain.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-lg-12"
                    style="box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="blog-posts">
                            <article class="post clearfix mb-0">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <br><br>
                                        <img src="{{ asset('data/value.webp') }}" alt=""
                                            class="img-responsive img-fullwidth" style="background-color: #9cd0f4;">
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                        <div class="media-body pl-15">
                                            <center>
                                                <h2 class="entry-title text-black text-uppercase pt-0 mt-0"
                                                    style="text-shadow: 2px 2px gray;">
                                                    Our Core Principles
                                                </h2>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-9 col-lg-9 col-md-offset-2">
                        <div class="col-xs-6 col-sm-12 col-md-6">
                            <div class="icon-box left media mb-20">
                                <a class="media-left pull-left" href="#">
                                    <i class="fa fa-balance-scale text-theme-colored" style="font-size: 60px"></i>
                                </a>
                                <div class="media-body">
                                    <h3 class="mt-0">Integrity</h3>
                                    <p style="font-size: 15px; color: #1359a1;">
                                        We embrace and uphold the highest standards of personal and professional ethics,
                                        honesty and trust.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-12 col-md-6">
                            <div class="icon-box left media mb-20">
                                <a class="media-left pull-left" href="#">
                                    <i class="fa fa-users text-theme-colored" style="font-size: 60px"></i>
                                </a>
                                <div class="media-body">
                                    <h3 class="mt-0">Respect</h3>
                                    <p style="font-size: 15px; color: #1359a1;">
                                        We treat everyone with uncompromising respect, civility and fairness.
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-6 col-sm-12 col-md-6">
                            <div class="icon-box left media mb-20">
                                <a class="media-left pull-left" href="#">
                                    <i class="fa fa-user-plus text-theme-colored" style="font-size: 60px"></i>
                                </a>
                                <div class="media-body">
                                    <h3 class="mt-0">Collaboration</h3>
                                    <p style="font-size: 15px; color: #1359a1;">
                                        We work as a team and share knowledge for continuous improvement, learning and
                                        innovation.
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-12 col-md-6">
                            <div class="icon-box left media mb-20">
                                <a class="media-left pull-left" href="#">
                                    <i class="fa fa-lightbulb-o text-theme-colored" style="font-size: 60px"></i>
                                </a>
                                <div class="media-body">
                                    <h3 class="mt-0">Empowerment</h3>
                                    <p style="font-size: 15px; color: #1359a1;">
                                        We are empowered to deliver operational excellence through innovation and leadership
                                        at all levels.
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-6 col-sm-12 col-md-6">
                            <div class="icon-box left media mb-20">
                                <a class="media-left pull-left" href="#">
                                    <i class="fa fa-check-square text-theme-colored" style="font-size: 60px"></i>
                                </a>
                                <div class="media-body">
                                    <h3 class="mt-0">Responsibility</h3>
                                    <p style="font-size: 15px; color: #1359a1;">
                                        We are responsible to fulfil our commitments to colleagues and clients with a clear
                                        understanding of the urgency and accountability inherent in those commitments.
                                    </p>
                                </div>
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
