<a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
</a>

@include('partials.header')

<main id="main" class="main min-h-80">
    @yield('content')
</main>

@hasSection('sidebar')
    <aside class="sidebar">
        @yield('sidebar')
    </aside>
@endif

@include('partials.footer')
