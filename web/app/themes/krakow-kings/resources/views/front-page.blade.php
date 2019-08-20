@extends('layouts.app')

@php
    $prefix = '_kings_front_page_';
    $video = get_post_meta(get_the_ID(), $prefix . 'video', true);
@endphp

@section('content')
    <section class="kk-page kk-homepage">
        <video class="kk-homepage__video" src="{{ $video }}" autoplay muted loop poster="{{ $video }}"></video>
    </section>
@endsection
