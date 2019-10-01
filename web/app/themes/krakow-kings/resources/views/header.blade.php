@php
    $logo = wp_get_attachment_image_url(\App\kings_get_option('logo_id'), 'logo', false);
    $socials = \App\kings_get_option('socials');
@endphp

<header class="kk-header">
    <nav class="kk-header__navbar">
        <div class="kk-header__content kk-header__content--left">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => null, 'menu_class' =>
                'kk-menu__nav']) !!}
            @endif
        </div>
        @if(!empty($logo))
            <a class="kk-header__brand" href="{{ home_url('/') }}">
                <img src="{{ $logo }}" alt="Kraków Football Kings">
            </a>
        @endif
        <div class="kk-header__content kk-header__content--right">
            @if (has_nav_menu('secondary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'container' => null, 'menu_class' =>
                'kk-menu__nav']) !!}
            @endif
            <div class="kk-header__socials">
                @if(!empty($socials))
                    @foreach($socials as $social)
                        @if(strtolower($social['name']) === 'facebook' || strtolower($social['name']) === 'instagram')
                            <a class="kk-social-icon {{ 'kk-social-icon--' . strtolower($social['name']) }} menu-item"
                               href="{{ $social['link'] }}" target="_blank">
                                {!! assetSvg('ic-' . strtolower($social['name']), 'kk-ic--social', $social['logo_id']) !!}
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
        <div class="kk-hader__hamburger-wrapper">
            <button class="kk-header__hamburger hamburger hamburger--collapse" type="button"
                    aria-label="Menu" data-target="primary-navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </button>
        </div>
    </nav>

    <div id="primary-navigation" class="kk-menu kk-menu--fixed js-menu">
        @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => null, 'menu_class' =>
            'kk-menu__nav']) !!}
        @endif
    </div>
</header>

