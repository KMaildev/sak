@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <style>
        .ch-info h3 {
            color: #fff;
            text-transform: uppercase;
            position: relative;
            letter-spacing: 2px;
            font-size: 22px;
            margin: 0 30px;
            padding: 10px;
            font-family: 'Open Sans', Arial, sans-serif;
            text-shadow:
                0 0 1px #fff,
                0 1px 2px rgba(0, 0, 0, 0.3);
        }

        .ch-info p {
            color: #fff;
            padding: 10px 5px;
            font-style: italic;
            margin: 0 30px;
            font-size: 12px;
            border-top: 1px solid rgba(255, 255, 255, 0.5);
        }

        .ch-info p a {
            display: block;
            color: #fff;
            color: rgba(255, 255, 255, 0.7);
            font-style: normal;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 9px;
            letter-spacing: 1px;
            padding-top: 4px;
            font-family: 'Open Sans', Arial, sans-serif;
        }

    </style>
    <section class="">
        <div class="container pt-0 pb-0">
            <div class="section-content">
                <div class="row equal-height-inner mt-sm-0" data-margin-top="15px">

                    <div
                        class="col-sm-4 col-md-4 pr-0 pr-sm-0 pl-sm-15 pr-xs-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                        <div class="sm-height-auto" style="padding: 10px;">
                            <div class="bg-theme-colored-gradient text-center sm-text-center mb-sm-10 p-30 pt-40 pb-40">
                                <div class="media-body">
                                    <i class="fa fa-line-chart font-42 text-white"></i>
                                    <h3 class="heading text-white mt-0">
                                        Get career advice.
                                    </h3>
                                    <p class="text-white">
                                        Advising you and helping you grow in your career is our goal!
                                    </p>
                                    <a href="{{ route('carrer_advice.index') }}"
                                        class="btn btn-md btn-default mt-10 no-border"
                                        style="background-color:orange; color: white; font-weight: bold">
                                        Our Tips
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-sm-4 col-md-4 pl-0 pr-0 pr-sm-0 pl-sm-0 pr-xs-15 pl-xs-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                        <div class="sm-height-auto" style="padding: 10px;">
                            <div class="text-center sm-text-center mb-sm-10 p-30 pt-40 pb-40"
                                style="background-color: #75173e;
                                                                    background: -webkit-gradient(linear, left top, left bottom, from(#75173e), to(#d1709a));
                                                                    background: -webkit-linear-gradient(top, #75173e, #d1709a);
                                                                    background: -moz-linear-gradient(top, #75173e, #d1709a);
                                                                    background: -ms-linear-gradient(top, #75173e, #d1709a);
                                                                    background: -o-linear-gradient(top, #75173e, #d1709a);">
                                <div class="media-body">
                                    <i class="fa fa-file-text font-42 text-white"></i>
                                    <h3 class="heading text-white mt-0">
                                        Send your CV.
                                    </h3>
                                    <p class="text-white">
                                        Get uploaded to our database to connect with our recruiters.
                                    </p>
                                    <a href="{{ route('cv.index') }}" class="btn btn-md btn-default mt-10 no-border"
                                        style="background-color: #193872; color: white; font-weight: bold">
                                        Upload Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-sm-4 col-md-4 pl-0 pr-sm-15 pl-sm-0 pl-xs-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                        <div class="sm-height-auto" style="padding: 10px;">
                            <div class="bg-theme-colored3 text-center sm-text-center mb-sm-10 p-30 pt-40 pb-40"
                                style="background-color: #317229;
                                                                                                                                                                                                                                                                                background: -webkit-gradient(linear, left top, left bottom, from(#317229), to(#50ed3b));
                                                                                                                                                                                                                                                                                background: -webkit-linear-gradient(top, #317229, #50ed3b);
                                                                                                                                                                                                                                                                                background: -moz-linear-gradient(top, #317229, #50ed3b);
                                                                                                                                                                                                                                                                                background: -ms-linear-gradient(top, #317229, #50ed3b);
                                                                                                                                                                                                                                                                                background: -o-linear-gradient(top, #317229, #50ed3b);">
                                <div class="media-body">
                                    <i class="fa fa-globe font-42 text-white"></i>
                                    <h3 class="heading text-white mt-0">
                                        Work abroad.
                                    </h3>
                                    <p class="text-white">
                                        Get ready to find a job overseas and discover our offers in Japan!
                                    </p>
                                    <a href="{{ route('overseas_jobs.show', 1) }}"
                                        class="btn btn-md  btn-default mt-10 no-border"
                                        style="background-color: #75173e; color: white; font-weight: bold">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
    </section>



    <section id="about">
        <div class="container pb-90 pb-sm-90">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-7 col-md-8">
                        <h2 class="mt-0 line-height-1 line-bottom-edu">Welcome to <span
                                class="text-theme-colored3">EduPoints</span></h2>
                        <p class="lead mb-10">We can change life with the teach of student by Eduhunt.</p>
                        <p>We care for students, protect their welfare, and prepare them for the future are the most
                            important issues we face during our lifetime.</p>
                        <div class="row sm-text-center">
                            <div class="col-sm-6 col-md-6">
                                <div class="about-thumb">
                                    <img src="images/about/1.jpg" class="mt-5" alt="">
                                </div>
                                <div class="mb-15">
                                    <h4 class="font-raleway font-weight-700 mt-15"><a href="#">Graduate <span
                                                class="text-theme-colored3">Education</span></a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quas, quidem totam,
                                        fuga iste et voluptatem tempora molestiae.</p>
                                    <a class="btn btn-colored btn-sm btn-circled btn-theme-colored mt-5"
                                        href="page-about1.html">Read more</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-4">
                        
                            
                            
                            
                            <div class=" ">
                                <div class="py-5">
                                    <ul class="mt-5 mt-sm-20">
                                        <a href="#" class="btn btn" style="background-color:blue; color:white; font-weight:bold;"> Career Advice</a>
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="">
                                <div class="py-5">
                                    <ul class="mt-5 mt-sm-20">
                                        <a href="#" class="btn btn-" style="background-color:blue; color:white; font-weight:bold;"> KANJI Japanese Language Traing Center</a>
                                    </ul>
                                </div>
                               
                            </div>
                            <div class="">
                                <div class=" ">
                                    <ul class="mt-5 mt-sm-20">
                                        <a href="#" class="btn btn" style="background-color:blue; color:white; font-weight:bold;"> Policy of Languange Center</a>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="bg-lighter">
        <div class="container-fluid pt-0 pb-0">
            <div class="section-content">
                <div class="row equal-height">
                    <br><br>
                    <div class="col-xs-12 col-sm-12 col-md-6 pr-30 pl-30">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <div class="icon-box-new bg-white text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-object-group font-32 text-white"></i>
                                    </a>
                                    <h4 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">
                                        OUR VISION
                                    </h4>
                                    <p>
                                        Our vision is to become the employers’ preferred Recruitment Agency of choice based
                                        on the extent and quality of our services
                                    </p>
                                    <a class="btn btn-sm btn-flat btn-theme-colored2 mt-15 mb-sm-30 mt-sm-0"
                                        href="{{ route('company_statement.index') }}">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="icon-box-new bg-white text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-arrows-alt font-32 text-white"></i>
                                    </a>
                                    <h4 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">
                                        OUR MISSION
                                    </h4>
                                    <p>
                                        Our mission is to support employers to succeed business operations through their
                                        excellent workforce; to empower our candidates
                                    </p>
                                    <a class="btn btn-sm btn-flat btn-theme-colored2 mt-15 mb-sm-30 mt-sm-0"
                                        href="{{ route('company_statement.index') }}">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="icon-box-new bg-white text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-diamond font-32 text-white"></i>
                                    </a>
                                    <h4 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">
                                        OUR CORE PRINCIPLES
                                    </h4>
                                    <p>
                                        <b>Integrity:</b> We embrace and uphold the highest standards of personal and
                                        professional
                                        ethics, honesty and trust.
                                    </p>
                                    <a class="btn btn-sm btn-flat btn-theme-colored2 mt-15 mb-sm-30 mt-sm-0"
                                        href="{{ route('company_statement.index') }}">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-60">
                            <div class="col-sm-12 col-sm-12 col-md-12 sm-text-center">
                                <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">
                                    About
                                    <span class="" style="text-shadow: 2px 2px 2px gray; color: #2977b4">
                                        Saint Arkar Company Limited
                                    </span>
                                </h2>
                                <p class="font-15 pb-sm-10" style="text-align: justify">
                                    Saint Arkar Company Limited was established and obtain the agency license (License
                                    No.2238/2013) in 2013. We, thereafter, we obtained our agency license (138/2015) and
                                    subsequently we obtained the employment agency license (112/2017) for Thailand in 2017
                                    which the licenses are issued by the Ministry of Labor, Immigration and Population,
                                    Republic of the Union of Myanmar. We are also the member of Myanmar Oversea Employment
                                    Agencies Federation (MOEAF) . We have signed the code of conduct developed by developed
                                    by the Myanmar Overseas Employment Agencies Federation (MOEAF), in collaboration with
                                    the Ministry of Labour, Immigration and Population (MOLIP) and with technical input from
                                    the ILO TRIANGLE in ASEAN project.
                                </p>
                                <a class="btn btn-lg btn-flat btn-theme-colored2 mt-15 mb-sm-30 mt-sm-0"
                                    href="{{ route('about.index') }}">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 pr-30 pl-30">
                        <div class="col-xs-10 col-sm-10 col-md-10">
                            <iframe width="150" height="70" src="https://www.youtube.com/embed/sbGKmw9ixpY"
                                allowfullscreen></iframe>

                            <iframe style="padding-top: 10px;" width="150" height="70"
                                src="https://www.youtube.com/embed/NQ6_Sqt_w3Y" allowfullscreen></iframe>

                            <iframe style="padding-top: 10px;" width="150" height="70"
                                src="https://www.youtube.com/embed/gAw89LEKx3s" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="" style="background-color: white">
        <br><br>
        <div class="container pt-0 pb-0">
            <div class="section-content">
                <div class="row equal-height">
                    <div class="col-xs-12 col-sm-12 col-md-12 pr-30 pl-30">
                        <div class="row">
                            @foreach ($countries as $country)
                                <div class="col-sm-6 col-lg-3 col-md-3">
                                    <div class="icon-box-new iconsq text-center clearfix m-0 pr-15 pl-15 pt-30 pb-20 mb-40"
                                        style="background-color: #{{ $country->color_code ?? 'bb8d2f' }}; border: 1px solid #cccccc;">
                                        <img src="{{ $country->photo }}" alt=""
                                            style="background-color: #{{ $country->color_code ?? 'bb8d2f' }}">
                                        <div class="ch-info">
                                            <a href="{{ route('overseas_jobs.show', $country->id) }}">
                                                <h3>
                                                    {{ $country->country ?? '' }}
                                                </h3>
                                                <p>Search Jobs</p>
                                            </a>
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
