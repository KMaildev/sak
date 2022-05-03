@extends('layouts.app')
@section('title', 'Medical Training')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Caregiver Training</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                Caregiver Training
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

                    <div class="col-sm-7 col-md-8">
                        <h2 class="mt-0 line-height-1 line-bottom-edu">
                            About us <span class="text-theme-colored3">Caregiver Training</span>
                        </h2>
                        <p class="lead mb-10">
                            We can change life with the teach of student by Eduhunt.
                        </p>
                        <p>
                            Medical Training Services believes strengthening self-care behaviours alongside a trusting and
                            nurturing patient care system is paramount to improving health and wellbeing.
                        </p>

                        <div class="row mb-30">
                            <div class="col-sm-6 col-md-6 mb-20">
                                <div class="info border-1px">
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">
                                        Why Should I Attend a Caregiver Training?
                                    </h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li style="text-align: justify">
                                                <i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Many caregiver training programmes teach important techniques and useful
                                                tips.
                                            </li>
                                            <li style="text-align: justify">
                                                <i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                You will be able to create a comfortable environment for both your care
                                                recipient and yourself.
                                            </li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mb-20">
                                <div class="info border-1px">
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">Skills Training at
                                        Caregiver Training Courses </h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li style="text-align: justify">
                                                <i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Personal care techniques, including proper bathing techniques and
                                                lift-and-carry techniques
                                            </li>
                                            <li style="text-align: justify">
                                                <i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Tips to maintain one’s health and well-being as a caregiver .
                                            </li>
                                            <li style="text-align: justify">
                                                <i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Clinical skills like tube feeding, catheter care and tracheostomy care .
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6 mb-20">
                                <div class="info border-1px">
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">How Do I Apply for Caregiver Training ?</h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                The Agency for Integrated Care has produced caregiver guides on:
                                            </li>
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Body Mechanics — a guide on how to move your loved one without injuring yourself and him/her.
                                            </li>
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Activities of Daily Living — a guide on how you can take care of your loved one’s personal hygiene needs.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mb-20">
                                <div class="info border-1px">
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">Aims of Caregiver Training</h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                To provide quality caregiving service to customers by developing quality caregivers.
                                            </li>
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                To provide vocational training to youngs especially young ladies.

                                            </li>
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                To create job opportunities for trainees at SAK.

                                            </li>
                                            
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                To fulfil the care need of customers for healthier & happier life.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row sm-text-center">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="about-thumb">
                                    <img src="{{ asset('assets/images/about/1.jpg') }}" class="mt-5" alt="">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="about-thumb">
                                    <img src="{{ asset('assets/images/about/1.jpg') }}" class="mt-5" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-5 col-md-4">

                        <div class="bg-lightest border-1px p-30 mb-0">
                            <h3 class="text-theme-colored mt-0 pt-5">
                                <span>Submit</span> your CV
                            </h3>
                            <hr>
                            <p>
                                To submit your CV to us, please complete the form below. After we have received your
                                application
                                and CV, one of our specialist career consultants will contact you when they are able to
                                introduce you for positions that fit your skills and experience.
                            </p>
                            <form id="job_apply_form" action="" method="post" enctype="multipart/form-data"
                                autocomplete="off">
                                <div class="row">

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" placeholder="Name" name="name"
                                                value="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">NRC No</label>
                                            <input type="text" class="form-control" placeholder="NRC No" name="nrc"
                                                value="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Email Address</label>
                                            <input type="email" class="form-control" placeholder="Email Address"
                                                name="email" value="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Phone Number"
                                                name="phone" value="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Date Of Birth</label>
                                            <input type="text" class="form-control" placeholder="Date Of Birth"
                                                name="date_of_birth" value="">
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Age</label>
                                            <input type="text" class="form-control" placeholder="Age" name="age" value="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Gender</label>
                                            <ul class="row">
                                                <div class="col-md-4">
                                                    <input type="radio" name="gender" value="Male" checked> Male
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="radio" name="gender" value="Female"> Female
                                                </div>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Passport</label>
                                            <input type="text" class="form-control" placeholder="Passport" name="passport"
                                                value="">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Date Of Expiry
                                                (Passport)</label>
                                            <input type="text" class="form-control"
                                                placeholder="Date Of Expiry (Passport)" name="expire_date" value="">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label">Education</label>
                                            <input type="text" class="form-control" placeholder="Education"
                                                name="education" value="">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label">Language</label>
                                            <input type="text" class="form-control"
                                                placeholder="English 4 skills, N5 Japanese" name="language" value="">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label">Current Address</label>
                                            <input type="text" class="form-control" placeholder="Current Address"
                                                name="current_address" value="">
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label">Current Address</label>
                                            <input type="text" class="form-control" placeholder="Current Address"
                                                name="current_address" value="">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
                                        <div class="form-group">
                                            <label>C/V Upload</label>
                                            <input name="form_attachment" class="file" type="file">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10">
                                                Apply Now
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
@endsection
