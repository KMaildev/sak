</div>
<!-- end main-content -->
<!-- Footer -->
<footer id="footer" class="footer bg-black-111">
    <div class="container pt-70 pb-40">

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

<script src="{{ asset('kanji/js/custom.js') }}"></script>
<script src="{{ asset('kanji/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('kanji/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('kanji/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('kanji/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script src="{{ asset('kanji/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}">
</script>
<script src="{{ asset('kanji/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}">
</script>
<script src="{{ asset('kanji/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('kanji/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}">
</script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

@yield('script')

</body>
</html>
