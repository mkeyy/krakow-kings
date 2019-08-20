@php
    $socials = \App\kings_get_option('socials');
@endphp

<section class="kk-sidebar">
    <div class="kk-sidebar__socials">
        @if(!empty($socials))
            @foreach($socials as $social)
                @if(!empty($social['name']) && !empty($social['link']))
                    <a href="{{ $social['link'] }}" class="kk-sidebar__socials-link">{{ $social['name'] }}</a>
                @endif
            @endforeach
        @endif
    </div>
</section>
