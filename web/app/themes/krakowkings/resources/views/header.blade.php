<header class="main-header">
    <div class="container">
        <nav class="main-header__navbar">
            <a class="main-header__brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.png')"
                                                                          alt="Kraków Football Kings"/></a>
            <div class="main-header__content">
                <div class="main-header__socials">
                    <a href="https://www.instagram.com/kingskrakow"><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
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
                        <a href="https://www.instagram.com/kingskrakow"><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

