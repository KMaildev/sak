@include('layouts.includes.header')

@if (request()->route()->getName() == 'home')
    @include('layouts.includes.slider')
@endif


@include('layouts.includes.alert')
@yield('content')

@include('layouts.includes.footer')
