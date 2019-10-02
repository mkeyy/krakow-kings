@php
    $logo = wp_get_attachment_image_url(\App\kings_get_option('logo_id'), 'footer-logo', false);
    $footer = \App\kings_get_option('footer')[0];
    $socials = \App\kings_get_option('socials');
@endphp

<footer class="kk-footer">
    <div class="kk-container">
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
        <div class="kk-copyrights">
            <small>&#9426; 2019 <?= get_bloginfo('name') ?> all rights reserved.</small>
        </div>
    </div>
</footer>
