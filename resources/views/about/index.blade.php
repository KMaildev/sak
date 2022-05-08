@extends('layouts.app')
@section('title', 'About Us')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">About Us</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                About Us
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
                    <div class="col-sm-12 col-md-4 col-lg-4" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2 class="mt-0 line-height-1 line-bottom-edu">Term Dates</h2>
                        <div class="owl-carousel-1col" data-nav="true">

                            <div class="item">
                                <div class="newcomer">
                                    <img src="{{ asset('data/6.jpg') }}" alt=""
                                        style="width: 100%; height: 370px; background-size: center; object-fit: cover;">
                                </div>
                            </div>

                            <div class="item">
                                <div class="newcomer">
                                    <img src="{{ asset('data/3.jpg') }}" alt=""
                                        style="width: 100%; height: 370px; background-size: center; object-fit: cover;">
                                </div>
                            </div>

                            <div class="item">
                                <div class="newcomer">
                                    <img src="{{ asset('data/2.jpg') }}" alt=""
                                        style="width: 100%; height: 370px; background-size: center; object-fit: cover;">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 col-md-8 col-lg-8" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">
                            About
                            <span class="text-theme-colored3">
                                Saint Arkar Company Limited
                            </span>
                        </h2>
                        <p class="font-15" style="text-align: justify">
                            Saint Arkar Company Limited was established and obtain the agency license (License No.2238/2013)
                            in 2013. We, thereafter, we obtained our agency license (138/2015) and subsequently we obtained
                            the employment agency license (112/2017) for Thailand in 2017 which the licenses are issued by
                            the Ministry of Labor, Immigration and Population, Republic of the Union of Myanmar. We are also
                            the member of Myanmar Oversea Employment Agencies Federation (MOEAF) . We have signed the code
                            of conduct developed by developed by the Myanmar Overseas Employment Agencies Federation
                            (MOEAF), in collaboration with the Ministry of Labour, Immigration and Population (MOLIP) and
                            with technical input from the ILO TRIANGLE in ASEAN project.
                        </p>
                        <p class="font-15" style="text-align: justify">
                            We specialise in recruiting qualified candidates and supplying manpower to the various
                            industries in Singapore, Malaysia and Thailand. We built our reputation by providing sufficient
                            knowledge and trainings to workers, supporting sufficient resources for employers and closely
                            compliance of ethical recruitment policy in order to provide efficient and reliable workforce to
                            our clients(employers). We are committed to offer ethical recruitment services for the
                            candidates, and clients(employers) to place the right person, in the right job, with the right
                            skills, at the right time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="text-center bg-silver-light">
        <div class="container pb-70 pb-sm-60">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center line-height-1 mt-0">Why<span class="text-theme-colored3"> Choose</span> Us
                        </h2>
                        <p class="text-center">

                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row equal-height">
                    <div class="col-sm-4">
                        <div class="icon-box iconbox-theme-colored">
                            <a class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded mb-10"
                                href="#">
                                <i class="fa fa-line-chart"></i>
                            </a>
                            <h4 class="icon-box-title">Career Progression</h4>
                            <p class="text-gray">
                                We know how important your career is to you. It’s important to us too! That’s why we have a
                                clear and transparent career path with international opportunities, supported by our
                                industry-renowned training and development.


                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box iconbox-theme-colored">
                            <a class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded mb-10"
                                href="#">
                                <i class="fa fa-tasks"></i>
                            </a>
                            <h4 class="icon-box-title">We’re locally owned</h4>
                            <p class="text-gray">
                                If you want to place a candidate, you’ll benefit from our on-the-ground expertise. If you
                                require a candidate to be placed elsewhere, you’ll benefit from our extensive networks in
                                capital cities, major regional cities and even remote parts of the country.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box iconbox-theme-colored">
                            <a class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded mb-10"
                                href="#">
                                <i class="fa fa-pie-chart"></i>
                            </a>
                            <h4 class="icon-box-title">Talent development</h4>
                            <p class="text-gray">
                                Talent development is becoming increasingly important to both organizations and their
                                employees.
                                SAK offers a clear and transparent career journey and provides the support and development
                                needed for people to reach their potential.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box iconbox-theme-colored">
                            <a class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded mb-10"
                                href="#">
                                <i class="fa fa-th-large"></i>
                            </a>
                            <h4 class="icon-box-title">Highly experienced</h4>
                            <p class="text-gray">
                                The team at SAK brings more than 10 years’ experience to the table and is skilled at
                                recruiting at all levels, in all industries and in all sectors.
                                <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box iconbox-theme-colored">
                            <a class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded mb-10"
                                href="#">
                                <i class="fa fa-toggle-up"></i>
                            </a>
                            <h4 class="icon-box-title">We receive referrals</h4>
                            <p class="text-gray">
                                Every year the number of referrals we receive grows. This includes personal referrals from
                                employers and jobseekers. It’s a great testament to our high level of professionalism and
                                service.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box iconbox-theme-colored">
                            <a class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded mb-10"
                                href="#">
                                <i class="fa fa-users"></i>
                            </a>
                            <h4 class="icon-box-title">Partnership Approach</h4>
                            <p class="text-gray">
                                Recruiters can only manage one particular geographic location, or profession and/or industry
                                of specialization. Recruiters partner with other recruiters to take advantage of different
                                candidate databases, industry knowledge, and client relationships.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div role="alert" class="alert alert-info">
                            <i style="font-size: 24px; color:#7c0c6c; text-shadow: 3px 3px 3px gray;">
                                Working with SAK is a pleasure, fun and good for my organisation and the people we recruit.
                            </i>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
