@extends('layouts.app')
@section('title', 'Our Key Members')
@section('content')
    <section>
        <div class="container pb-sm-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1">Our Key <span class="text-theme-colored3">Members</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Acque quidem eaque, amet doloribus,
                            error inventore, quisquam totam magni cumque.</p>
                    </div>
                </div>
            </div>
            <div class="section-content text-center">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-sm-6 col-md-3 mb-sm-30 mb-30">
                            <div class="team-block bg-light pt-10 pb-15">
                                <div class="team-thumb">
                                    <img class="img-fullwidth" src="{{ $team->photo }}" alt="Saint Arkar Company Limited"
                                        style="width: 100%; height: 250px; object-fit: cover; background-size: contain; background-position: center;">
                                </div>
                                <div class="info">
                                    <div class="pt-10 pb-10 bg-theme-colored">
                                        <h4 class="mt-0 mb-0 text-white">
                                            {{ $team->name }}
                                        </h4>
                                        <h6 class="mt-0 mb-0 text-white">
                                            {{ $team->position }}
                                        </h6>
                                    </div>
                                    <ul class="styled-icons icon-theme-colored3 icon-circled icon-dark icon-sm mt-15 mb-0">
                                        <li>
                                            <a href="{{ $team->facebook_link }}" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $team->twitter_link }}">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $team->whats_app }}">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
