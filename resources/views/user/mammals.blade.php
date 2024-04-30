@extends('components.layout')
@section('body_class','the-mammals')
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<section class="d-flex flex-column z-3 story-section">
    <div class="{{ $darkThemeFlag ? 'text-white' : 'text-black' }} story-header">
        <h2 class="story-header-text">the</h2>
    @if($fauna_page2)
            <h2 class="story-header-text">{!! nl2br(e( $fauna_page2->fauna_page2_title )) !!}</h2>
            <p class="story-header-description">{!! nl2br(e( $fauna_page2->fauna_page2_description )) !!}</p>

    @endif
    </div>

    @if($fauna_page2)
    @php
        $backgroundImageUrl = asset('uploads/story/fauna/fauna_page2/' . $fauna_page2->fauna_page2_image);
    @endphp
    <style>
        .the-mammals {
            background: lightgray url('{{ $backgroundImageUrl }}');
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
@endif
</section>

@endsection

@section('footer')
<footer class="footer">
    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag />
</footer>
@endsection

@section('nav')
<x-story-nav :dark=$darkThemeFlag />
<x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection
