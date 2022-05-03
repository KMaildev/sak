<header id="header" class="header">
    <div class="header-top bg-light sm-text-center style-bordered">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="widget">
                        <i class="fa fa-clock-o text-theme-colored"></i> Opening Hours: Mon - Tues : 6.00 am -
                        5.00 pm, Sunday Closed
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget">
                        <ul class="list-inline pull-right flip sm-pull-none sm-text-center list-bordered">
                            <li class="bg-theme-colored text-white mb-xs-5">
                                <i class="fa fa-phone"></i> Call
                                Us at <a class="text-white" href="tel:+959 250 419 702">+959 250 419 702</a>
                            </li>
                            <li class="bg-theme-colored3 text-white mb-xs-5">
                                <i class="fa fa-envelope-o"></i>
                                <a class="text-white" href="mailto:info@recruitmentmyanmarsak.com">
                                    info@recruitmentmyanmarsak.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord-right" class="menuzord orange no-bg">
                    <a class="menuzord-brand pull-left flip mb-15" href="index-mp-layout1.html">
                        {{-- <img src="{{ asset('assets/images/logo-wide.png') }}" alt=""> --}}
                    </a>
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
                                        MD Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('why_choose') }}">
                                        Why Choose ASK?
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team.index') }}">
                                        Meet Our People
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
                                        Tailoring Training
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
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        Jobs in Singapore
                                    </a>
                                </li>
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
                                    <a href="{{ route('training.index') }}">
                                        Kanji Training Center
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
                            <a href="{{ route('contact.index') }}" style="font-weight: bold">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
