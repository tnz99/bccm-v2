@extends('components.layout')
@section('body_class','the-newsE')
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<section class="d-flex flex-column z-3 story-section">
    <div class="{{ $darkThemeFlag ? 'text-white' : 'text-black' }} story-header">
        <h2 class="news-header-text">the</h2>
        @if($news_and_events)
                <h2 class="news-header-text">{!! nl2br(e(  $news_and_events->news_title )) !!}</h2>
                <p class="news-header-description">{!! nl2br(e(  $news_and_events->news_description )) !!}</p>

        @endif
    </div>
    @if($news_and_events)
    @php
        $backgroundImageUrl = asset('uploads/news_and_events/' . $news_and_events->news_image);
    @endphp
    <style>
        .the-newsE  {
            background: lightgray url('{{ $backgroundImageUrl }}');
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
    @endif <!-- Add this line -->
</section>
@endsection

@section('footer')
<footer class="footer">
    <x-news-control :links="$links" :dark=$darkThemeFlag />
</footer>
@endsection

@section('nav')
<x-story-nav :dark=$darkThemeFlag />
<x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection
