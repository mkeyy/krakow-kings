@php
    $logo = wp_get_attachment_image_url(\App\kings_get_option('logo_id'), 'logo', false);
    $facebook = \App\kings_get_option('facebook');
    $instagram = \App\kings_get_option('instagram');;
@endphp

<header class="main-header">
    <div class="container">
        <nav class="main-header__navbar">
            <a class="main-header__brand" href="{{ home_url('/') }}"><img src="{{ $logo }}"
                                                                          alt="Kraków Football Kings"/></a>
            <div class="main-header__content">
                <div class="main-header__socials">
                    <a class="socials-icon ic-instagram" href="{{ $instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="socials-icon ic-facebook" href="{{ $facebook }}" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>

                <button id="primaryNavigation" class="hamburger hamburger--squeeze main-header__hamburger" type="button"
                        aria-label="Menu">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
                </button>

                <div class="main-header__menu js-menu">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => null, 'menu_class' =>
                        'main-header__nav']) !!}
                    @endif

                    <div class="main-header__socials">
                        <a href="{{ $instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $facebook }}" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

