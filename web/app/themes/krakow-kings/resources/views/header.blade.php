@php
    $logo = wp_get_attachment_image_url(\App\kings_get_option('logo_id'), 'logo', false);
@endphp

<header class="kk-header">
    <nav class="kk-header__navbar">
        <a class="kk-header__brand" href="{{ home_url('/') }}">Kraków Football Kings&#8482;</a>
        <div class="kk-header__content">
            <div class="kk-header__socials">
                @if(!empty($instagram)) <a class="kk-social-icon ic-instagram" href="{{ $instagram}}"
                                           target="_blank"><i
                            class="fab fa-instagram"></i></a> @endif
                @if(!empty($facebook)) <a class="kk-social-icon ic-facebook" href="{{ $facebook }}" target="_blank"><i
                            class="fab fa-facebook"></i></a> @endif
            </div>

            <button class="kk-header__hamburger hamburger hamburger--collapse" type="button"
                    aria-label="Menu" data-target="primary-navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </button>

            <div id="primary-navigation" class="kk-menu js-menu">
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => null, 'menu_class' =>
                    'kk-menu__nav']) !!}
                @endif
            </div>
            </a>
        </div>
    </nav>
</header>

