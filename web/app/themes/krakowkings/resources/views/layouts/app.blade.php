<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('template-partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('header')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('footer')
    @php wp_footer() @endphp
  </body>
</html>
