<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/sunrays.css') }}"> -->
@extends('components.layout')
@section('body_class',$bodyClass)
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<!-- Add this to your HTML file -->
<div class="sun-container">
    <div class="sun"></div>
</div>  
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
    <script src="{{ asset('js/sunrays.js') }}"></script>
@endsection
