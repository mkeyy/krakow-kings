@extends('layouts.app')

<?php $prefix = '_kings_front_page_'; ?>

@section('content')

    <div class="kk-page kk-home">

        <?php
        /*
         * Homepage Hero Section
         */

        $posts = get_post_meta(get_the_ID(), $prefix . 'posts', true);
        ?>
        @if(!empty($posts))
            <section class="kk-section--hero kk-hero">
                @foreach($posts as $key => $postID)
                    <a href="{{ get_the_permalink($postID) }}" class="kk-hero__item">
                        {{--                <video class="kk-home__video" src="{{ $video }}" autoplay muted loop poster="{{ $video }}"></video>--}}

                        <picture class="kk-picture kk-lozad"
                                 data-iesrc="{{ get_the_post_thumbnail_url($postID, 'carousel') }}"
                                 data-alt="{{ get_the_title($postID) }}">
                            <source srcset="{{ get_the_post_thumbnail_url($postID, 'carousel') }}"
                                    media="(min-width: 320px)">
                        </picture>

                        <div class="kk-content">
                            <span class="kk-bar"></span>
                            <h2 class="kk-h2">{{ get_the_title($postID) }}</h2>
                            @if($key === array_key_first($posts))
                                <p class="kk-p">{!! get_post_meta($postID, '_kings_posts_short_description', true) !!}</p>
                            @endif
                            <button class="kk-btn kk-btn--more">
                                <span>Więcej</span>
                                <?= assetSvg('ic-arrow') ?>
                            </button>
                        </div>
                    </a>
                @endforeach
            </section>
        @endif

        <?php
        /*
         * Next Match Section
         */

        $tOne = get_post_meta(get_the_ID(), $prefix . 't_one', true);
        $tTwo = get_post_meta(get_the_ID(), $prefix . 't_two', true);
        $mDate = get_post_meta(get_the_ID(), $prefix . 'match_date', true);
        $mDate = get_post_meta(get_the_ID(), $prefix . 'match_date', true);
        $mTime = get_post_meta(get_the_ID(), $prefix . 'match_time', true);
        $mScore = get_post_meta(get_the_ID(), $prefix . 'match_score', true);
        $mSummary = get_post_meta(get_the_ID(), $prefix . 'match_summary', true);
        $mBackground = get_post_meta(get_the_ID(), $prefix . 'match_background', true);
        ?>
        <section class="kk-section kk-section--match kk-lozad" data-background-image="{{ $mBackground }}">
            <div class="kk-match">

                <div class="kk-match__team">
                    @if(!empty($tOne))
                        <picture class="kk-picture kk-lozad"
                                 data-iesrc="{{ wp_get_attachment_image_url($tOne[0]['logo_id'], 'team-logo') }}"
                                 data-alt="{{ $tOne[0]['name'] }}">
                            <source srcset="{{ wp_get_attachment_image_url($tOne[0]['logo_id'], 'team-logo') }}"
                                    media="(min-width: 320px)">

                        </picture>
                        <h2 class="kk-h2">{{ $tOne[0]['name'] }}</h2>
                    @endif
                </div>
                <div class="kk-match__details">
                    <span class="kk-date kk-span">{{ $mDate ? date_i18n('j M Y', strtotime($mDate)) : '-- : --' }}</span>
                    <span class="kk-time kk-span">{{ $mTime ? 'GODZ. ' . $mTime : '-- : --' }}</span>
                    <div class="kk-vs kk-span">
                        <p class="kk-p">vs</p>
                    </div>
                    <span class="kk-score kk-span">{{ $mScore ? $mScore : '-- : --' }}</span>
                    @if(!empty($mSummary))
                        <a href="{{ $mSummary }}" class="kk-summary kk-btn kk-btn--primary" target="_blank">
                            <span>{{ __('Podsumowanie meczu', 'kings') }}</span>
                        </a>
                    @endif
                </div>
                <div class="kk-match__team">
                    @if(!empty($tTwo))
                        <picture class="kk-picture kk-lozad"
                                 data-iesrc="{{ wp_get_attachment_image_url($tTwo[0]['logo_id'], 'team-logo') }}"
                                 data-alt="{{ $tTwo[0]['name'] }}">
                            <source srcset="{{ wp_get_attachment_image_url($tTwo[0]['logo_id'], 'team-logo') }}"
                                    media="(min-width: 320px)">

                        </picture>
                        <h2 class="kk-h2">{{ $tTwo[0]['name'] }}</h2>
                    @endif
                </div>
            </div>
        </section>

        <?php
        /*
         * Sponsors Carousel Section
         */

        $sponsors = new WP_Query(array(
            'post_type' => 'sponsor',
            'post_status' => 'publish',
            'posts_per_page' => -1
        ));
        ?>
        @if(!empty($sponsors))
            <section class="kk-section kk-section--sponsors">
                <div class="kk-slider--sponsors">
                    @while($sponsors->have_posts())
                        @php
                            $sponsors->the_post();
                            $link = get_post_meta(get_the_ID(), '_kings_sponsors_link', true);
                        @endphp
                        <a href="{{ $link }}" class="kk-slider__item" target="_blank">
                            <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'sponsor-logo') }}"
                                 alt="{{ get_the_title() }}" class="kk-slider__image kk-lozad">
                        </a>
                    @endwhile
                    @php wp_reset_query() @endphp
                </div>
            </section>
        @endif

        <?php
        /*
         * News Section
         */

        $news = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1
        ));
        ?>
        @if(!empty($news))
            <section class="kk-section kk-section--news">
                <div class="kk-sidebar">
                    <h2 class="kk-h2">{{ __('Aktualności', 'kings') }}</h2>
                    <a href="{{ get_post_type_archive_link('post') }}"
                       class="kk-btn kk-btn--primary">{{ __('Zobacz więcej', 'kings') }}</a>
                </div>

                <div class="kk-news">
                    @while($news->have_posts())
                        @php
                            $news->the_post();
                            $shortDescription = get_post_meta(get_the_ID(), '_kings_posts_short_description', true);
                        @endphp
                        <a href="{{ get_the_permalink() }}" class="kk-news" target="_blank">
                            <picture class="kk-picture kk-lozad"
                                     data-iesrc="{{ get_the_post_thumbnail_url(get_the_ID(), 'news-thumbnail') }}"
                                     data-alt="{{ get_the_title() }}">
                                <source srcset="{{ get_the_post_thumbnail_url(get_the_ID(), 'news-thumbnail') }}"
                                        media="(min-width: 320px)">

                            </picture>
                            <h3 class="kk-h3">{{ get_the_title() }}</h3>
                            @if($shortDescription) <p class="kk-p">{!! $shortDescription !!}</p> @endif
                        </a>
                    @endwhile
                    @php wp_reset_query() @endphp
                </div>
            </section>
        @endif

    </div>

@endsection
