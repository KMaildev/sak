@include('layouts.kanji.header')

@if (request()->route()->getName() == 'home')
    @include('layouts.kanji.slider')
@endif


@include('layouts.kanji.alert')
@yield('content')

@include('layouts.kanji.footer')
