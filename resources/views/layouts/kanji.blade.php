@include('layouts.kanji.header')

{{-- @if (Route::currentRouteName() == 'kanji_training.index')
    @include('layouts.kanji.slider')
@endif --}}

@include('layouts.kanji.alert')
@yield('content')

@include('layouts.kanji.footer')
