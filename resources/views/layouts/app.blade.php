@include('layouts.includes.header')

@if (request()->route()->getName() == 'home')
    @include('layouts.includes.slider')
@endif


@yield('content')

@include('layouts.includes.footer')
