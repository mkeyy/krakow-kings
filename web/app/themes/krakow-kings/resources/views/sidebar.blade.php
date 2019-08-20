@php
    $socials = \App\kings_get_option('socials');
@endphp

<section class="kk-sidebar">
    <div class="kk-sidebar__socials">
        @foreach($socials as $social)
            <a href="{{ $social['link'] }}" class="kk-sidebar__socials-link">{{ $social['name'] }}</a>
        @endforeach
    </div>
</section>
