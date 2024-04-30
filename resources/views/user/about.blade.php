@extends('components.layout')
@section('body_class','about')
@section('header')
    <x-header :dark=false />
@endsection

@section('content')

<section class="d-flex flex-column z-3 story-section">
    <div class="story-header text-black">
        @if($about_us)
            <h2 class="story-header-text">{!! nl2br(e( $about_us->about_title )) !!}</h2>
            <p class="story-header-description">{{ $about_us->about_description }}</p>

        @endif
    </div>
</section>
@endsection
@if($about_us)
        @php
            $backgroundImageUrl = asset('uploads/about_us/' . $about_us->about_image);
        @endphp
        <style>
            .about {
                backdrop-filter: blur(6px);
                background: lightgray url('{{ $backgroundImageUrl }}');
                height: 100vh;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
        </style>
    @endif

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav background="the-about-cnav-bg" inner-border="border-white"/>
@endsection
