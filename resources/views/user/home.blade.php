@extends('components.layout')
@section('body_class', 'home')
@section('header')
    <x-header :dark="$darkThemeFlag" />
@endsection
@section('content')

<div class="snow">
</div>
<section class="d-flex justify-content-between story-section">
    <div class="home-main-content" style="padding-top: 30px;">
        @if($edit_home)
            <h2 class="home-header-text">{{ $edit_home->home_title }}</h2>
            <h1 class="home-header-subtext">{!! nl2br(e($edit_home->home_subtitle)) !!}</h1>
        @endif

        <a href="/register" id='rotate-icon'class="register-btn d-flex flex-row align-items-center justify-content-around no-underline" style="padding-left: 40px; padding-right: 40px;">
            <span  class="no-underline text-dark register-text">Register</span>
            <svg class="register-icon" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0001 0C17.5636 0 18.1042 0.222427 18.5026 0.618324L33.3777 15.3961C34.2075 16.2205 34.2075 17.5573 33.3777 18.3817C32.5479 19.206 31.2023 19.206 30.3725 18.3817L19.1251 7.20778V35.8889C19.1251 37.0549 18.1737 38 17.0001 38C15.8264 38 14.875 37.0549 14.875 35.8889V7.20778L3.62762 18.3817C2.79774 19.206 1.45227 19.206 0.622393 18.3817C-0.207464 17.5573 -0.207464 16.2205 0.622393 15.3961L15.4975 0.618324C15.8959 0.222427 16.4365 0 17.0001 0Z" fill="black"/>
                <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 0.704783 -0.709422 -0.704783 17 12.6667)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 -0.704783 -0.709422 0.704783 25.5001 27.0222)" stroke="black" stroke-width="4" stroke-linecap="round"/>
            </svg>
        </a>
  </div>
</section>
@if($edit_home)
        @php
            $backgroundImageUrl = asset('uploads/edit_home/' . $edit_home->home_image);
        @endphp
        <style>
            .home {
                backdrop-filter: blur(50%);
                background: lightgray url('{{ $backgroundImageUrl }}');
                height: 100vh;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
        </style>
    @endif
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav background="the-climate-cnav-bg" inner-border="border-white"/>
@endsection
