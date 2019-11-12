@include('layouts.partials.head')
<body>

<div class="super_container">

    <!-- Header -->

@include('layouts.partials.header')

<!-- Menu -->

@include('layouts.partials.menu')

<!-- Home -->

@yield('home')

<!-- Domain Pricing -->

@include('layouts.partials.domain-pricing')

@yield('content')

<!-- Footer -->

    @include('layouts.partials.footer')
</div>

@yield('js')
@include('layouts.partials.script-js')
