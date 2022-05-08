@extends('layouts.app')
@section('title', 'MD’S MESSAGE')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">MD’S MESSAGE</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                MD’S MESSAGE
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container-fulid p-0">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 bg-theme-colored">
                        <br>
                        <div class="owl-carousel-1col pr-150 pl-150 pr-sm-50 pl-sm-50 pb-90" data-dots="true">
                            <div class="item">
                                <div class="testimonial-wrapper text-center">
                                    <div class="content">
                                        <div class="col-sm-6 col-md-3 mb-sm-30">
                                            <div class="team-block pt-10 pb-15"
                                                style="box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                                                <div class="team-thumb" style="background-color: white">
                                                    <img class="img-fullwidth" src="{{ asset('data/md.jpeg') }}" alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="pt-10 pb-10" style="background-color: #02B0E8">
                                                        <h4 class="mt-0 mb-0 text-white" style="font-size: 17px;">
                                                            Daw Su Su Mon
                                                        </h4>
                                                        <h6 class="mt-0 mb-0 text-white" style="font-size: 15px;">
                                                            Managing Director
                                                        </h6>
                                                    </div>
                                                    <ul
                                                        class="styled-icons icon-theme-colored icon-dark icon-sm mt-15 mb-0">
                                                        <li>
                                                            <a href="#" data-bg-color="#3B5998">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-bg-color="#02B0E8">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-bg-color="#7cef6c">
                                                                <i class="fa fa-whatsapp"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-bg-color="#e93f33">
                                                                <i class="fa fa-youtube"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="mb-sm-10 text-white-f3" style="font-size: 19px; font-weight: bold;">
                                            “PROTECT MIGRANT RIGHTS, PROVIDE DECENT WORKS, PROMOTE EMPLOYMENT OF ORIGIN
                                            COUNTRY AND SUPPORT PRODUCTIVITY AND ECONOMIC GROWTH OF RECEIVING COUNTRY.”
                                        </p>
                                        <br>
                                        <p style="color: white; text-align: center; font-size: 17px;">
                                            As the Managing Director of Saint Arkar Employment Agency, I have the
                                            opportunity to work with dynamic, young and dedicated team, who share the common
                                            mission of providing better jobs for workers in Myanmar and providing the best
                                            quality services to our clients (employers). It is such an honour to be able to
                                            contribute to such a worthy mission. <br><br>

                                            We are also committed to ensure that we comply our explicit, clear and
                                            transparent, ethical recruitment policy that enable us to demonstrate our
                                            commitment to core principles of “Integrity, Respect, Collaboration, Empowerment
                                            and Responsibility” and the highest principles of professionalism, fair
                                            practices and ethics in dealing with our clients(employers), workers, our
                                            employee and other business associates. <br><br>

                                            We also adhere to applicable labour laws, regulations and code of conducts, and
                                            we do not involve in any recruitment or employment processes which are illegal
                                            or harmful to migrant workers. <br><br>

                                            Me and my team value our partners who have chosen our services and we look
                                            forward to establishing long-term business relationship. We always welcome and
                                            invite everyone who wish to work hand in hand with us and we assure our client’s
                                            satisfaction and best services. <br><br>

                                            Thank you so much for your support and look forward to connecting with you in
                                            the near future!
                                        </p>
                                    </div>
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
