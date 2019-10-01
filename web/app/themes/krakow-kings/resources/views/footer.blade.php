@php
    $logo = wp_get_attachment_image_url(\App\kings_get_option('logo_id'), 'footer-logo', false);
    $footer = \App\kings_get_option('footer')[0];
    $socials = \App\kings_get_option('socials');
@endphp

<footer class="kk-footer">
    <div class="kk-container">
        <div class="kk-footer__brand">
            @if(!empty($logo))
                <a class="kk-brand" href="{{ home_url('/') }}"><img src="{{ $logo }}" alt="Kraków Football Kings"></a>
            @endif
            <h3 class="kk-h3 kk-brand-title"><?=  get_bloginfo('name') ?></h3>
            <small class="kk-copyrights">&#9426; 2019 <?= get_bloginfo('name') ?></small>
            <small class="kk-copyrights">all rights reserved.</small>
        </div>
        <div class="kk-footer__contact">
            @if(!empty($footer['contact_title']))
                <h4 class="kk-h4 kk-title">{{ $footer['contact_title'] }}</h4>
            @endif
            @if(!empty($footer['contact_email']))
                <a class="kk-link"
                   href="mailto:{{ $footer['contact_email'] }}">{{ $footer['contact_email'] }}</a>
            @endif
            @if(!empty($footer['contact_phone']))
                <a class="kk-link" href="tel:{{ $footer['contact_phone'] }}">{{ $footer['contact_phone'] }}</a>
            @endif
        </div>
        <div class="kk-footer__menu">
            @if(!empty($socials))
                <div class="kk-footer__socials">
                    @foreach($socials as $social)
                        <a class="kk-social-icon {{ 'kk-social-icon--' . strtolower($social['name']) }}"
                           href="{{ $social['link'] }}" target="_blank">
                            {!! assetSvg('ic-' . strtolower($social['name']), 'kk-ic--social', $social['logo_id']) !!}
                        </a>
                    @endforeach
                </div>
            @endif

            <nav class="kk-footer__nav">
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => null, 'menu_class' =>
                    'kk-menu__nav']) !!}
                @endif
            </nav>
        </div>
    </div>
</footer>
