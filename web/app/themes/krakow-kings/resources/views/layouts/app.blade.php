<!doctype html>
<html {!! get_language_attributes() !!}>
@include('head')

    <body @php body_class() @endphp>
        @php do_action('get_header') @endphp
        @include('header')

        <main class="kk-main">
            @include('sidebar')
            @yield('content')
        </main>

        @php do_action('get_footer') @endphp
        @include('footer')
        @php wp_footer() @endphp
    </body>
</html>
