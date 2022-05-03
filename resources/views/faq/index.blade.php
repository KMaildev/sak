@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg2.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">FAQ</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                FAQ
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <div class="list-group">
                        <a href="#section-one" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #f5f5f5">
                            Q. Can any foreigner work in Japan?
                        </a>

                        <a href="#section-two" class="list-group-item smooth-scroll-to-target">
                            Q. Is there a cost to introduce a job?
                        </a>

                        <a href="#section-three" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #f5f5f5">
                            Q. Is it possible to apply in languages ​​other than those listed in the title?
                        </a>

                        <a href="#section-four" class="list-group-item smooth-scroll-to-target">
                            Q. I don't know what I want to apply for, but ...
                        </a>

                        <a href="#section-five" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #f5f5f5">
                            Q. What kind of photo can I use for my resume?
                        </a>

                    </div>
                </div>
                <div class="col-md-10 col-md-push-1">

                    <div id="section-one" class="mb-50">
                        <h3>Q. Can any foreigner work in Japan?</h3>
                        <hr>
                        <p class="mb-20">
                            Foreigners must have a workable status of residence in order to work in Japan.
                            This status of residence can be confirmed with your passport or residence card.
                            <br>
                            Status of residence that allows you to work regardless of occupation or industry
                            Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons
                            with the above qualifications must work in any occupation Is possible.
                        </p>
                    </div>

                    <div id="section-two" class="mb-50">
                        <h3>Q. Is there a cost to introduce a job?</h3>
                        <hr>
                        <p class="mb-20">
                            There is no registration fee or referral fee. Please apply with confidence.
                        </p>
                    </div>


                    <div id="section-three" class="mb-50">
                        <h3>Q. Is it possible to apply in languages ​​other than those listed in the title?</h3>
                        <hr>
                        <p class="mb-20">
                            Basically, we are recruiting in the language described in the title, but if you contact us, we
                            will check if there is recruitment in other languages, so please contact us.
                        </p>
                    </div>

                    <div id="section-four" class="mb-50">
                        <h3>Q. I don't know what I want to apply for, but ...</h3>
                        <hr>
                        <p class="mb-20">
                            You can register from this form and introduce the project that suits the candidate.
                            Please feel free to contact us about what kind of industry you are interested in and the
                            conditions for changing jobs. The recruitment coordinator of Goodman Service will consult with
                            you.
                        </p>
                    </div>


                    <div id="section-five" class="mb-50">
                        <h3>Q. What kind of photo can I use for my resume?</h3>
                        <hr>
                        <p class="mb-20">
                            The photo of your resume is an important material to judge the impression of the candidate on
                            the document. The photo of your resume will be an important material to use for the selection,
                            so please register the photo suitable for the selection of the company.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
