<header class="page-header">
    <nav class="navbar">
        <a class="navbar-brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.png')" alt="Kraków Football Kings"/></a>
        <div class="navbar-primary">
            <button class="hamburger hamburger--squeeze hamburger-primary" type="button"
                    data-target="#primaryNavigation"
                    aria-label="Menu">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
            </button>

            <div class="collapse navbar-collapse" id="primaryNavigation">
                <div class="navbar-wrapper">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => null, 'menu_class' =>
                        'navbar-nav']) !!}
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>

