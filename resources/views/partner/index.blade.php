@extends('layouts.app')
@section('title', 'Our Partners')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Our Partners</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                Our Esteemed Partners
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
