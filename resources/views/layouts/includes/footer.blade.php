<section class="bg-theme-colored">
    <div class="container pt-0 pb-0">
        <div class="call-to-action pt-30 pb-20">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="mt-0 text-white font-30">
                        Keep in Touch
                    </h3>
                    <p class="text-white">
                        If you have any queries about recruitments, vacancies, or anything else, our team is ready to
                        response all your queries.
                    </p>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('contact.index') }}" class="btn btn-colored btn-gray btn-lg mt-20">Contact
                        Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- Footer -->
<footer id="footer" class="footer bg-black-111">
    <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
            <div class="col-sm-6 col-md-4">
                <div class="widget dark">
                    <div class="widget dark mb-30">
                        <h5 class="widget-title line-bottom">Contact Information</h5>
                    </div>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10">
                            <i class="fa fa-map-marker text-theme-color-2 mr-5"></i>
                            <a class="text-gray" href="#">
                                No.1306, Mahawthahtar Street, Ward 40, Dagon (North) Township, Yangon, Myanmar.
                            </a>
                        </li>
                        <li class="m-0 pl-10 pr-10">
                            <i class="fa fa-phone text-theme-color-2 mr-5"></i>
                            <a class="text-gray" href="tel:+959 250 419 702">
                                +959 250 419 702
                            </a>
                        </li>
                        <li class="m-0 pl-10 pr-10">
                            <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i>
                            <a class="text-gray"
                                href="mailto:info@recruitmentmyanmarsak.com">info@recruitmentmyanmarsak.com</a>
                        </li>
                        <li class="m-0 pl-10 pr-10">
                            <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i>
                            <a class="text-gray" href="mailto:admin@recruitmentmyanmarsak.com">
                                admin@recruitmentmyanmarsak.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-md-2">
                <div class="widget dark mb-30">
                    <h5 class="widget-title line-bottom">Quick Links</h5>
                </div>
                <div class="widget dark">
                    <ul class="list-border">
                        <li class="">
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

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
                            <a href="{{ route('company_statement.index') }}">
                                Vision / Mission / Values
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
                </div>
            </div>

            <div class="col-sm-6 col-md-2">
                <div class="widget dark mb-30">
                    <h5 class="widget-title line-bottom">Find Overseas Jobs</h5>
                </div>
                <div class="widget dark">
                    <ul class="list-border">
                        @foreach ($countries as $country)
                            <li>
                                <a href="{{ route('overseas_jobs.show', $country->id) }}">
                                    {{ $country->country ?? '' }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Facebook</h5>
                    <div id="fb-root">
                        <div class="fb-page" data-href="https://www.facebook.com/saintarkarrecruitmentmyanmar/"
                            data-tabs="timeline" data-height="240" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        </div>

                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src =
                                    'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=310515396183252&autoLogAppEvents=1';
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-black-222">
        <div class="container pt-10 pb-0">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="font-14 text-black-777 m-0 mb-10">
                        Copyright &copy; {{ now()->year }} Saint Arkar Company Limited. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="flaticon-seo-transport-3"></i></a>
</div>

<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}">
</script>
<script src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}">
</script>
<script src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}">
</script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

@yield('script')

</body>

</html>
