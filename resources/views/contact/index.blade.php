@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Contact Us</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                Contact Us
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="divider">
        <div class="container">
            <div class="row pt-30">

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20">
                                <a class="media-left pull-left" href="#">
                                    <i class="pe-7s-map-2 text-theme-colored"></i>
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0">Our Office Location</h5>
                                    <p>
                                        No.1306, Mahawthahtar Street, Ward 40, Dagon (North) Township, Yangon, Myanmar.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20">
                                <a class="media-left pull-left" href="#">
                                    <i class="pe-7s-call text-theme-colored"></i>
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0">Contact Number</h5>
                                    <p>
                                        <a href="tel:+959250419702">
                                            +959 250 419 702
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20">
                                <a class="media-left pull-left" href="#">
                                    <i class="pe-7s-mail text-theme-colored"></i>
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0">Email Address</h5>
                                    <p>
                                        <a href="mailto:info@recruitmentmyanmarsak.com">
                                            info@recruitmentmyanmarsak.com
                                        </a>
                                        <a href="mailto:admin@recruitmentmyanmarsak.com">
                                            admin@recruitmentmyanmarsak.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20">
                                <a class="media-left pull-left" href="#">
                                    <i class="fa fa-whatsapp text-theme-colored"></i>
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0">Make a Video Call</h5>
                                    <p>WhatsApp</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
                    <p>
                        Alternatively, you may contact us by filling up the contact form. Our team will response you
                        shortly.
                    </p>

                    <form autocomplete="off" method="POST" action="{{ route('contact.store') }}" id="create-form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name <small>*</small></label>
                                    <input name="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                        placeholder="Enter Name">
                                    @error('name')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Email <small>*</small></label>
                                    <input name="email" class="form-control email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Subject <small>*</small></label>
                                    <input name="subject" class="form-control" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5"
                                data-loading-text="Please wait...">Send your message</button>
                            <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5456.163483134849!2d144.95177475051227!3d-37.81589041361766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sbd!4v1556130803137!5m2!1sen!2sbd"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
