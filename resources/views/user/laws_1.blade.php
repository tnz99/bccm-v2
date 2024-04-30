@extends('components.layout')
@section('body_class', 'the-laws-1')
@section('header')
    <x-header :dark=false />
@endsection
@section('content')
<div class="d-flex flex-column story-section">
    <div id="main-section" class="d-flex justify-content-start year-story-wrapper">
        <div class="year-story-header">
            <div class="p-0">
                <h2 class="text-black fw-700 year-story-header-year">1995</h2>
                <p class="year-story-header-subtext">"Bhutan's Forest and Nature Conservation Act - Conservation and sustainable management of Bhutan's forests."</p>
            </div>
        </div>
        
        <ul class="year-story-content">
        The act has helped in the conservation and sustainable management of Bhutan's forests, which cover over 70% of the country's land area.
        Bhutan has maintained a high forest coverage, which contributes to carbon sequestration and helps mitigate climate change.
        The act has facilitated the protection of biodiversity, including endangered species like the Bengal tiger and snow leopard.
        </ul>
    </div>

    <ul class="year-nav-list">
        <li class="year-nav-list-item"><a href="/the-laws-1" class="spin-button year-nav-link">1999</a></li>
        <li class="year-nav-list-item"><a href="/laws-2000" class="spin-button year-nav-link">2000</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2001</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2002</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2003</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2004</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2005</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2006</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2007</a></li>
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
    <x-story-nav :dark=false />
    <x-circular_nav background="the-law-cnav-bg" inner-border="border-gray"/>
@endsection
