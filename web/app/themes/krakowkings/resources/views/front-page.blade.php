@extends('layouts.app')

@php
    $prefix = '_kings_front_page_';
    $video = get_post_meta(get_the_ID(), $prefix . 'video', true);
@endphp

@section('content')
    <div class="front-page">
        <video src="{{ $video }}" autoplay muted loop poster="{{ $video }}">
        </video>
    </div>
@endsection
