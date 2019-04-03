<header class="main-header">
    <div class="container">
        <nav class="main-header__navbar">
            <a class="main-header__brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.png')"
                                                                     alt="Kraków Football Kings"/></a>
            <div class="main-header__content">
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
                </div>

                <div class="main-header__socials">

                </div>
            </div>
        </nav>
    </div>
</header>

