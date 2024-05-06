@extends('components.layout')
@section('body_class',$bodyClass)
@section('header')
    <link rel="stylesheet" href="/css/spring.css" />
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<div class="spring-animation"></div>
<section class="d-flex flex-column z-3 story-section">
    <div class="{{ $darkThemeFlag ? 'text-white' : 'text-black' }} story-header">
        <h2 class="story-header-text">the</h2>
        <h2 class="story-header-text">{{ $name }}</h2>
        <p class="story-header-description">{{ $description }}</p>
    </div>
</section>
@endsection

@section('footer')
<footer class="footer">
    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag/>
</footer>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
    <script src="/js/spring.js"></script>

    <script>
        var sakura = new Sakura('body', {
            colors: [
            {
                gradientColorStart: 'rgba(255, 183, 197, 0.9)',
                gradientColorEnd: 'rgba(255, 197, 208, 0.9)',
                gradientColorDegree: 120,
            },
            {
                gradientColorStart: 'rgba(255,189,189)',
                gradientColorEnd: 'rgba(227,170,181)',
                gradientColorDegree: 120,
            },
            {
                gradientColorStart: 'rgba(212,152,163)',
                gradientColorEnd: 'rgba(242,185,196)',
                gradientColorDegree: 120,
            },
            ]
        });
    </script>
@endsection
