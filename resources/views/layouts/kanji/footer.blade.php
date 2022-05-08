</div>
<!-- end main-content -->
<!-- Footer -->
<footer id="footer" class="footer bg-black-111">
    <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
                    <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit.</p>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-color-2 mr-5"></i>
                            <a class="text-gray" href="#">203, Envato Labs, Behind Alis Steet,
                                Melbourne, Australia</a>
                        </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a
                                class="text-gray" href="#">123-456-789</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i>
                            <a class="text-gray" href="#">contact@yourdomain.com</a>
                        </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a
                                class="text-gray" href="#">www.yourdomain.com</a> </li>
                    </ul>
                </div>
             
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Latest News</h5>
             
                </div>
                <div class="widget dark">
                    <h5 class="widget-title">Instagram Feed</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark mb-30">
                    <h5 class="widget-title line-bottom">Twitter Feed</h5>
                    <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2">
                    </div>
                </div>
                <div class="widget dark">
                    <h5 class="widget-title">Useful Links</h5>
                    <ul class="list-border">
                        <li><a href="shortcode-sitemap.html">FAQ</a></li>
                        <li><a href="shortcode-sitemap.html">Sitemap</a></li>
                        <li><a href="page-contact1.html">Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Tags</h5>
                    <div class="tags">
                        <a href="#">lawyer</a>
                        <a href="#">practice</a>
                        <a href="#">judge</a>
                        <a href="#">courte</a>
                        <a href="#">injury</a>
                        <a href="#">injustice</a>
                        <a href="#">justice</a>
                        <a href="#">Script</a>
                        <a href="#">evidence</a>
                        <a href="#">success</a>
                        <a href="#">fight</a>
                        <a href="#">attorneys</a>
                        <a href="#">consulting</a>
                        <a href="#">support</a>
                        <a href="#">cases</a>
                        <a href="#">law</a>
                        <a href="#">criminal</a>
                    </div>
                </div>
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Subscribe Us</h5>
                    <!-- Mailchimp Subscription Form Starts Here -->
                    <form id="mailchimp-subscription-form-footer" class="newsletter-form">
                        <div class="input-group">
                            <input type="email" value="" name="EMAIL" placeholder="Your Email"
                                class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
                            <span class="input-group-btn">
                                <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0"
                                    type="submit">Subscribe</button>
                            </span>
                        </div>
                    </form>
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
