<header id="header" class="header">

    <div class="header-top bg-light sm-text-center style-bordered">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="widget">
                        <i class="fa fa-clock-o text-theme-colored"></i> Opening Hours: Mon - Tues : 6.00 am - 10.00 pm,
                        Sunday Closed
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget">
                        <ul class="list-inline pull-right flip sm-pull-none sm-text-center list-bordered">
                            <li class="bg-theme-colored text-white mb-xs-5">
                                <i class="fa fa-reply-all"></i>
                                <a class="text-white" href="{{ route('home') }}">
                                    Go To Main Webiste
                                </a>
                            </li>
                            <li class="bg-theme-colored3 text-white mb-xs-5">
                                <i class="fa fa-th-list"></i>
                                <a class="text-white" href="{{ route('kanji_enrollment_request.index') }}">
                                    Enrollment Request Form
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
                    <a class="menuzord-brand pull-left flip mb-15" href="{{ route('kanji_training.index') }}">
                        <img src="{{ asset('data/kanji/logo.jpg') }}" alt="">
                    </a>
                    <ul class="menuzord-menu">

                        <li class="">
                            <a href="{{ route('kanji_training.index') }}" style="font-weight: bold">
                                Home
                            </a>
                        </li>

                        <li class="">
                            <a href="#" style="font-weight: bold">About Us</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{ route('kanji_about.index') }}">
                                        About Us
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('kanji_teacher.index') }}">
                                        Our Teachers
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="{{ route('kanji_activities.index') }}" style="font-weight: bold">
                                Activities
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('kanji_faq.index') }}" style="font-weight: bold">
                                FAQ
                            </a>
                        </li>


                        <li class="">
                            <a href="{{ route('kanji_news.index') }}" style="font-weight: bold">
                                News
                            </a>
                        </li>


                        <li class="">
                            <a href="{{ route('kanji_contact.index') }}" style="font-weight: bold">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
