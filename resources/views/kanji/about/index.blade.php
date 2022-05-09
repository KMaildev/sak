@extends('layouts.kanji')
@section('title', 'About Us')
@section('content')
    <section class="inner-header divider parallax layer-overlay overlay-white-8"
        data-bg-img="{{ asset('data/banner/kanji.jpeg') }}">
        <div class="container pt-60 pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">About Us</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>
                                <a href="{{ route('kanji_training.index') }}">Home</a>
                            </li>
                            <li class="active text-theme-colored">
                                About Us
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-inherit">
        <div class="container">
            <div class="row">
                <div class="col-md-3 scrolltofixed-container">
                    <div class="list-group scrolltofixed z-index-0">
                        <a href="#section-one" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #d4a87a; color: #4c9733; font-weight: bold;">
                            Why learning with KANJI LANGUAGE TRAINING CENTER is right for you
                        </a>

                        <a href="#section-two" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #d4a87a; color: #4c9733; font-weight: bold;">
                            The secret to language learning: immersion
                        </a>

                        <a href="#section-three" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #d4a87a; color: #4c9733; font-weight: bold;">
                            Why KANJI Japanese Language Center?
                        </a>

                        <a href="#section-four" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #d4a87a; color: #4c9733; font-weight: bold;">
                            Who We Are?
                        </a>

                        <a href="#section-five" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #d4a87a; color: #4c9733; font-weight: bold;">
                            Our Vision
                        </a>

                        <a href="#section-six" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #d4a87a; color: #4c9733; font-weight: bold;">
                            Our Mission
                        </a>

                        <a href="#section-seven" class="list-group-item smooth-scroll-to-target"
                            style="background-color: #d4a87a; color: #4c9733; font-weight: bold;">
                            Our Values
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="section-one" class="mb-50">
                        <h3>Why learning with KANJI LANGUAGE TRAINING CENTER is right for you</h3>
                        <hr>
                        <p class="mb-20">
                            KANJI Japanese Language Center offers the fastest, most effective way to learn a new language -
                            with the cultural understanding to get the most out of these new skills.
                            With flexible learning options and customized learning programs, you’ll gain the skills and
                            confidence to start speaking a new language right away.
                        </p>
                    </div>
                    <div id="section-two" class="mb-50">
                        <h3>The secret to language learning: immersion</h3>
                        <hr>
                        <p class="mb-20">
                            Anyone has the ability to speak another language. Traditionally, the best way to learn was to
                            move abroad and immerse yourself in a new language and culture, but that’s not always practical
                            or affordable for many of us.
                            Our students tell us that learning with KANJI Japanese Language Center is the next best thing to
                            actually moving to a new country.
                        </p>
                    </div>
                    <div id="section-three" class="mb-50">
                        <h3>Why KANJI Japanese Language Center?</h3>
                        <hr>
                        <p class="mb-20">
                            1. The most effective
                            2. Fast and efficient results
                            3. The power of cultural understanding
                            4. Learn your own way
                        </p>
                    </div>
                    <div id="section-four" class="mb-50">
                        <h3>Who We Are?</h3>
                        <hr>
                        <p class="mb-20">
                            We are a diverse and dynamic group of individuals who have come together because of a passion to
                            share languages and culture from around the world.
                        </p>
                    </div>
                    <div id="section-five" class="mb-50">
                        <h3>Our Vision</h3>
                        <hr>
                        <p class="mb-20">
                            KANJI Japanese Language Training Center is located in Dagon (North) T/S, Yangon, Myanmar. We
                            provide excellent Japanese language courses to those students who are interested to study in
                            Japan as well as those people who are trying to enter in Japan as Trainee worker.
                            In the 21st century, under the basic idea that language acquisition is a way to communicate,
                            SAK’s goal is to turn out excellent human resource who can work and study in Japan and get back
                            to their own country and serve as a skilled manpower and give contribution for country’s
                            economic development.
                        </p>
                    </div>

                    <div id="section-six" class="mb-50">
                        <h3>Our Mission</h3>
                        <hr>
                        <p class="mb-20">
                            Educating students with Japanese language skills, knowledge, culture, and Applied Japanese for
                            Office and translation by providing excellent courses based on Information Technology.
                            Providing a solid learning and research experience through the creation of creative and
                            value-added talents of leaders for global community.
                            Developing professional services with an emphasis on application in Japanese knowledge to
                            improve the quality of life of Myanmar and the international community.
                        </p>
                    </div>

                    <div id="section-seven" class="mb-50">
                        <h3>Our Mission</h3>
                        <hr>
                        <p class="mb-20">
                            1.Courtesy
                            Act in a courteous manner towards others

                            2.Honesty
                            Be truthful and sincere in all your relations with others

                            3.Responsibility
                            Assume responsibility for your obligations, your actions and your belongings. Be punctual and
                            wear your school uniform proudly

                            4.Justice
                            Seek the fairest and most just way for all

                            5.Generosity
                            Consider others in your daily activities and be generous in your thoughts, deeds and words

                            6.Perseverance
                            Continue in a course of action even in the face of difficulty

                            7.Respect
                            Be respectful of others, yourself and your environment
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
