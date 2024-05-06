@extends('components.layout')
@section('body_class', 'the-flora5')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="story-section gallery-wrapper">
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background:  #524266; opacity: 0.8;">
                <div class="image @if($flora_page5_gallery1) bg-active @endif" style="@if($flora_page5_gallery1) background-image: url('{{ asset('uploads/story/flora/flora_page5/gallery1/' . $flora_page5_gallery1->flora_page5_gallery1_image ?? '') }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $flora_page5_gallery1->flora_page5_gallery1_title ?? '')) !!}</div>
                            <div class="sub">{!! nl2br(e( $flora_page5_gallery1->flora_page5_gallery1_subtitle ?? '')) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $flora_page5_gallery1->flora_page5_gallery1_description ?? '')) !!}</div>
                </div>
            </div>

            <div class="option" style="background:  #524266; opacity: 0.8;">
                <div class="image @if($flora_page5_gallery2) bg-active @endif" style="@if($flora_page5_gallery2) background-image: url('{{ asset('uploads/story/flora/flora_page5/gallery2/' . $flora_page5_gallery2->flora_page5_gallery2_image ?? '') }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $flora_page5_gallery2->flora_page5_gallery2_title ?? '')) !!}</div>
                            <div class="sub">{!! nl2br(e( $flora_page5_gallery2->flora_page5_gallery2_subtitle ?? '')) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $flora_page5_gallery2->flora_page5_gallery2_description ?? '')) !!}</div>
                </div>
            </div>

            <div class="option" style="background:  #524266; opacity: 0.8;">
                <div class="image @if($flora_page5_gallery3) bg-active @endif" style="@if($flora_page5_gallery3) background-image: url('{{ asset('uploads/story/flora/flora_page5/gallery3/' . $flora_page5_gallery3->flora_page5_gallery3_image ?? '') }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $flora_page5_gallery3->flora_page5_gallery3_title ?? '')) !!}</div>
                            <div class="sub">{!! nl2br(e( $flora_page5_gallery3->flora_page5_gallery3_subtitle ?? '')) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $flora_page5_gallery3->flora_page5_gallery3_description ?? '')) !!}</div>
                </div>
            </div>

            <div class="option" style="background:  #524266; opacity: 0.8;">
                <div class="image @if($flora_page5_gallery4) bg-active @endif" style="@if($flora_page5_gallery4) background-image: url('{{ asset('uploads/story/flora/flora_page5/gallery4/' . $flora_page5_gallery4->flora_page5_gallery4_image ?? '') }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $flora_page5_gallery4->flora_page5_gallery4_title ?? '')) !!}</div>
                            <div class="sub">{!! nl2br(e( $flora_page5_gallery4->flora_page5_gallery4_subtitle ?? '')) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $flora_page5_gallery4->flora_page5_gallery4_description ?? '')) !!}</div>
                </div>
            </div>


            <div class="option" style="background:  #524266; opacity: 0.8;">
                <div class="image @if($flora_page5_gallery5) bg-active @endif" style="@if($flora_page5_gallery5) background-image: url('{{ asset('uploads/story/flora/flora_page5/gallery5/' . $flora_page5_gallery5->flora_page5_gallery5_image ?? '') }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $flora_page5_gallery5->flora_page5_gallery5_title ?? '')) !!}</div>
                            <div class="sub">{!! nl2br(e( $flora_page5_gallery5->flora_page5_gallery5_subtitle ?? '')) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $flora_page5_gallery5->flora_page5_gallery5_description ?? '')) !!}</div>
                </div>
            </div>


            <div class="option" style="background:  #524266; opacity: 0.8;">
                <div class="image @if($flora_page5_gallery6) bg-active @endif" style="@if($flora_page5_gallery6) background-image: url('{{ asset('uploads/story/flora/flora_page5/gallery6/' . $flora_page5_gallery6->flora_page5_gallery6_image ?? '') }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $flora_page5_gallery6->flora_page5_gallery6_title ?? '')) !!}</div>
                            <div class="sub">{!! nl2br(e( $flora_page5_gallery6->flora_page5_gallery6_subtitle ?? '')) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $flora_page5_gallery6->flora_page5_gallery6_description ?? '')) !!}</div>
                </div>
            </div>


            <div class="option" style="background:  #524266; opacity: 0.8;">
                <div class="image @if($flora_page5_gallery7) bg-active @endif" style="@if($flora_page5_gallery7) background-image: url('{{ asset('uploads/story/flora/flora_page5/gallery7/' . $flora_page5_gallery7->flora_page5_gallery7_image ?? '') }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $flora_page5_gallery7->flora_page5_gallery7_title ?? '')) !!}</div>
                            <div class="sub">{!! nl2br(e( $flora_page5_gallery7->flora_page5_gallery7_subtitle ?? '')) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $flora_page5_gallery7->flora_page5_gallery7_description ?? '')) !!}</div>
                </div>
            </div>


            <div class="option" style="background:  #524266; opacity: 0.8;">
                <div class="image @if($flora_page5_gallery8) bg-active @endif" style="@if($flora_page5_gallery8) background-image: url('{{ asset('uploads/story/flora/flora_page5/gallery8/' . $flora_page5_gallery8->flora_page5_gallery8_image ?? '') }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $flora_page5_gallery8->flora_page5_gallery8_title ?? '')) !!}</div>
                            <div class="sub">{!! nl2br(e( $flora_page5_gallery8->flora_page5_gallery8_subtitle ?? '')) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $flora_page5_gallery8->flora_page5_gallery8_description ?? '')) !!}</div>
                </div>
            </div>
        </div>
    </div>


    <h1 class="text-white">the <span class="text-uppercase"
        @if($flora_home)
                class="story-header-text">{{ $flora_home->flora_home_title }}

        @endif
    </span></h1>

    @if($flora_home)
    @php
        $backgroundImageUrl = asset('uploads/story/flora/flora_home/' . $flora_home->flora_home_image);
    @endphp
    <style>
        .the-flora5  {
            backdrop-filter: blur(10px);
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
    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag/>
</footer>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection





