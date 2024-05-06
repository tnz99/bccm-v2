@extends('components.layout')
@section('body_class',$bodyClass,)
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="d-flex z-3 story-section" style="margin-top: 25vh; height: fit-content;justify-content: flex-start;align-items: center;">
    <div class="{{ $darkThemeFlag ? 'text-white' : 'text-black' }} story-header" style="height: fit-content;">
        @if($contact)
            <h2 class="story-header-text">{!! nl2br(e( $contact->contact_title )) !!}</h2>
            <p class="story-header-description">{{ $contact->contact_description }}</p>

        @endif
    </div>

    <div class= "containerfb">
        <a href="https://www.facebook.com/" class="fb-div"><img class= "fb" src="../images/backgrounds/fb.png" alt="img"/></a>
        <a href="https://www.instagram.com/" class="fb-div"><img class= "ig" src="../images/backgrounds/ig.png" alt="img"/></a>
        <a href="https://mail.google.com/" class="fb-div"><img class= "email" src="../images/backgrounds/email.png" alt="img"/></a>
    </div>
</section>
@endsection
@if($contact)
        @php
            $backgroundImageUrl = asset('uploads/contact/' . $contact->contact_image);
        @endphp
        <style>
            .contact {
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
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>

@endsection
