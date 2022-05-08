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

    <section id="about" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="container pb-90 pb-sm-90">
            <div class="section-content">
                <div class="row">

                    <div class="col-sm-7 col-md-8">
                        <h2 class="mt-0 line-height-1 line-bottom-edu">
                            About us <span class="text-theme-colored3">Caregiver Training</span>
                        </h2>
                        <p class="lead mb-10">
                            We can change life with the teach of student by SAK.
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
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">How Do I Apply for
                                        Caregiver Training ?</h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                The Agency for Integrated Care has produced caregiver guides on:
                                            </li>
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Body Mechanics — a guide on how to move your loved one without injuring
                                                yourself and him/her.
                                            </li>
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Activities of Daily Living — a guide on how you can take care of your loved
                                                one’s personal hygiene needs.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mb-20">
                                <div class="info border-1px">
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">Aims of Caregiver
                                        Training</h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                To provide quality caregiving service to customers by developing quality
                                                caregivers.
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
                            @foreach ($images as $image)
                                @php
                                    $values = explode(',', $image->photo);
                                @endphp
                                @foreach ($values as $photo)
                                    <div class="col-sm-6 col-md-6 col-lg-6" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="about-thumb">
                                            <img src="{{ $photo }}" class="mt-5" alt=""
                                                style="width: 100%; height: 200px; background-size: center; object-fit: cover; border: 3px solid #eb6033;">
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
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

                            @include('layouts.shared.job_enquirie_form')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
@endsection
