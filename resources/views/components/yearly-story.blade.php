@extends('components.layout')
@section('body_class', $bodyClass)
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection
@section('content')
<div class="d-flex flex-column">
    <div id="main-section" class="d-flex justify-content-start year-story-wrapper">
        <div class="year-story-header">
            <div class="p-0">
                <h2 class="text-black fw-700 year-story-header-year">{{ $year }}</h2>
                <p class="year-story-header-subtext">{{ $subtext }}</p>
            </div>
        </div>

        <div class="year-story-content">{{ $story }}</div>
    </div>

    <ul class="year-nav-list year-scroll">
        <li class="year-nav-list-item"><a href="/laws/1995" class="spin-button year-nav-link">1995</a></li>
        <li class="year-nav-list-item"><a href="/laws/2001" class="spin-button year-nav-link">2001</a></li>
        <li class="year-nav-list-item"><a href="/laws/2009" class="spin-button year-nav-link">2009</a></li>
        <li class="year-nav-list-item"><a href="/laws/2010" class="spin-button year-nav-link">2010</a></li>
        <li class="year-nav-list-item"><a href="/laws/2011" class="spin-button year-nav-link">2011</a></li>
        <li class="year-nav-list-item"><a href="/laws/2015" class="spin-button year-nav-link">2015</a></li>
        <li class="year-nav-list-item"><a href="/laws/2016" class="spin-button year-nav-link">2016</a></li>
        <li class="year-nav-list-item"><a href="/laws/2017" class="spin-button year-nav-link">2017</a></li>
        <li class="year-nav-list-item"><a href="/laws/2018" class="spin-button year-nav-link">2018</a></li>
        <li class="year-nav-list-item"><a href="/laws/2019" class="spin-button year-nav-link">2019</a></li>
        <li class="year-nav-list-item"><a href="/laws/2020" class="spin-button year-nav-link">2020</a></li>
    </ul>
</div>

<img id="prayer-wheel" src="/images/prayer-wheel/1.png" alt="prayer wheel" class="prayer-wheel-position prayer-wheel"  >
@endsection

@section('footer')
<footer class="footer">
    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag/>
</footer>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background=$cnavBg :inner-border=$cnavInnerBorder/>
@endsection
