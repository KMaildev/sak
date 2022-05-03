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
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <h2 class="mt-0 line-height-1 line-bottom-edu">Term Dates</h2>
                        <div class="owl-carousel-1col" data-nav="true">

                            <div class="item">
                                <div class="newcomer">
                                    <img src="{{ asset('data/about.jpeg') }}" alt="">
                                    <div class="newcomer-overlay">
                                        <div class="newcomer-inner">
                                            <h3 class="text-white">Spring Schedule </h3>
                                            <h4 class="text-white">15 January to 11 March</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="newcomer">
                                    <img src="{{ asset('assets/images/about/4.jpg') }}" alt="">
                                    <div class="newcomer-overlay">
                                        <div class="newcomer-inner">
                                            <h3 class="text-white">Fall Schedule </h3>
                                            <h4 class="text-white">23 April to 17 June</h4>
                                            <a class="btn btn-flat btn-theme-colored2 font-weight-600 flip mt-10"
                                                href="#">Join Here 20% off</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-8 col-lg-8">
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

@endsection

@section('script')
@endsection
