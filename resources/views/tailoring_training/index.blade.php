@extends('layouts.app')
@section('title', 'Medical Training')
@section('content')

    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Garment Training</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                Garment Training
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
                            About us <span class="text-theme-colored3">Garment Training</span>
                        </h2>
                        <p class="lead mb-10">
                            We can change life with the teach of student by SAK.
                        </p>
                        <p>
                            As part of Social business activity, Garment Training is a very good opportunity for the women.
                        </p>

                        <div class="row mb-30">
                            <div class="col-sm-6 col-md-6 mb-20">
                                <div class="info border-1px">
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">
                                        Why Should I Attend a Garment Training?
                                    </h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li style="text-align: justify">
                                                <i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Workers who complete these foundational skills courses are better able to quakify for higher paying positions in the garment sectors.
                                            </li>
                                            <li style="text-align: justify">
                                                <i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                We provide a nationally recognized vocational certification for all industries.
                                            </li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mb-20">
                                <div class="info border-1px">
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">Skills Training at
                                        Garment Training Courses </h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li style="text-align: justify">
                                                <i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                After the completion of the training, the women will be given direct jobs placement in exporting factories.
                                            </li>
                                            <li style="text-align: justify">
                                                <i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Through these trainings, women will at least be acquired with certain basic skills which help them make bigger steps towards the industry .
                                            </li>
                                            

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mb-20">
                                <div class="info border-1px">
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">Why training is important in garment industry?</h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Training of employees helps to develop necessary manpower with required skill & efficiency.
                                            </li>
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Training imparts skill & workmanship to an employee.
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mb-20">
                                <div class="info border-1px">
                                    <h4 class="mt-0 bg-theme-colored3 text-white pt-10 pb-10 pl-10">Aims of Garment Training</h4>
                                    <div class="timetable pb-10">
                                        <ul class="pr-10 pl-15">
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                Training of employees also lead to better quality, lower costs & organizational effectiveness.
                                            </li>
                                            <li><i class="fa fa-check-square-o pr-10" aria-hidden="true"></i>
                                                To help to develope necessary manpower with required skill & efficiency.
                                            </li>
                                            <br>

                                           
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
                                    <div class="col-sm-6 col-md-6 col-lg-6">
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
