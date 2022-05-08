<header id="header" class="header">

    <div class="header-top bg-theme-colored2 sm-text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="widget text-white">
                        <i class="fa fa-clock-o text-white"></i>
                        Opening Hours: Mon - Tues : 6.00 am - 5.00 pm, Sunday Closed
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <ul class="list-inline text-right flip sm-text-center">
                            <li>
                                <a class="text-white" href="{{ route('faq.index') }}">FAQ</a>
                            </li>
                            <li class="text-white">|</li>
                            <li>
                                <a class="text-white" href="{{ route('kanji_training.index') }}">KANJI</a>
                            </li>
                            <li class="text-white">|</li>
                            <li>
                                <a class="text-white" href="{{ route('cv.index') }}">Submit CV</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle p-0 bg-lighter xs-text-center">
        <div class="container pt-20 pb-20">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <a class="menuzord-brand pull-left flip sm-pull-center mb-15" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo-wide.png') }}" alt="">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <div class="header-widget-contact-info-box sm-text-center">
                        <div class="media element contact-info">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-envelope text-theme-colored font-icon sm-display-block"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="mailto:info@recruitmentmyanmarsak.com" class="title">Mail Us Today</a>
                                <h5 class="media-heading subtitle">
                                    info@recruitmentmyanmarsak.com
                                </h5>
                            </div>
                        </div>
                        <div class="media element contact-info">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-phone-square text-theme-colored font-icon sm-display-block"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="tel:+959 250 419 702" class="title">Call us for more details</a>
                                <h5 class="media-heading subtitle">
                                    +959 250 419 702
                                </h5>
                            </div>
                        </div>
                        <div class="media element contact-info">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-building-o text-theme-colored font-icon sm-display-block"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#" class="title">Company Location</a>
                                <h5 class="media-heading subtitle">
                                    Get Direction
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord" class="menuzord blue no-bg">

                    <ul class="menuzord-menu">

                        <li class="">
                            <a href="{{ route('home') }}" style="font-weight: bold">
                                Home
                            </a>
                        </li>

                        <li class="">
                            <a href="#" style="font-weight: bold">About Us</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        About of Our Company
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ route('md_message') }}">
                                        MD'S Message
                                    </a>
                                </li>
                 

                                <li>
                                    <a href="{{ route('team.index') }}">
                                        Meet Our Team
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('partner.index') }}">
                                        Our Partners
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="#" style="font-weight: bold">Recruit Services</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{ route('medical_training.index') }}">
                                        Caregiver Training
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('tailoring_training.index') }}">
                                        Garment Training
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('language_training.index') }}">
                                        Language Training
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="#" style="font-weight: bold">Jobs in Overseas</a>
                            <ul class="dropdown">
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('overseas_jobs.show', $country->id) }}">
                                            Jobs Available In {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>


                        <li class="">
                            <a href="#" style="font-weight: bold">Career Advice</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{ route('carrer_advice.index') }}">
                                        Career Advice
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('cv.index') }}">
                                        Submit Your CV
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="#" style="font-weight: bold">Our Training Center</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{ route('kanji_training.index') }}">
                                        KANJI Japanese Language Centre
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="{{ route('faq.index') }}" style="font-weight: bold">
                                FAQ
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('activities.index') }}" style="font-weight: bold">
                                Activities
                            </a>
                        </li>

                    </ul>

                    <div class="pull-right sm-pull-none mb-sm-15">
                        <a class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10"
                            href="{{ route('contact.index') }}">
                            Contact Us
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
