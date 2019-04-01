{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('template-partials.page-header')
    @include('template-partials.content-page')
  @endwhile
@endsection
