@extends('components.layout')
@section('body_class', 'the-kingdom2')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<section class="story-section gallery-wrapper">
    <div class="gallery-container">
        <div class="options">
            <div class="option">
                <div class="image @if($gallery1) bg-active @endif" style="@if($gallery1) background-image: url('{{ asset('uploads/story/flora/flora_page2/gallery1/' . $flora_page2_gallery1->kingdom_galleries0_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            @if($gallery1)
                                <div class="main">{!! nl2br(e( $gallery1->kingdom_galleries0_title )) !!}</div>
                                <div class="sub">{!! nl2br(e( $gallery1->kingdom_galleries0_subtitle )) !!}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content text-black scroll"> {!! nl2br(e( $gallery1->kingdom_galleries0_description )) !!}</div>
                </div>
            </div>

            <div class="option">
                <div class="image @if($gallery2) bg-active @endif" style="@if($gallery2) background-image: url('{{ asset('uploads/story/kingdom/gallery/galleries/' . $gallery2->kingdom_galleries1_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            @if($gallery2)
                                <div class="main">{!! nl2br(e( $gallery2->kingdom_galleries1_title )) !!}</div>
                                <div class="sub">{!! nl2br(e( $gallery2->kingdom_galleries1_subtitle )) !!}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content text-black scroll"> {!! nl2br(e( $gallery2->kingdom_galleries1_description )) !!}</div>
                </div>
            </div>

            <div class="option">
                <div class="image @if($gallery3) bg-active @endif" style="@if($gallery3) background-image: url('{{ asset('uploads/story/kingdom/gallery/galleries/' . $gallery3->kingdom_galleries2_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $gallery3->kingdom_galleries2_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $gallery3->kingdom_galleries2_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content text-black scroll">{!! nl2br(e( $gallery3->kingdom_galleries2_description )) !!}</div>
                </div>
            </div>

            <div class="option">
                <div class="image @if($gallery4) bg-active @endif" style="@if($gallery4) background-image: url('{{ asset('uploads/story/kingdom/gallery/galleries/' . $gallery4->kingdom_galleries3_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $gallery4->kingdom_galleries3_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $gallery4->kingdom_galleries3_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content text-black scroll">
                        {!! nl2br(e( $gallery4->kingdom_galleries3_description )) !!}
                    </div>
                </div>
            </div>

            <div class="option">
                <div class="image @if($gallery5) bg-active @endif" style="@if($gallery5) background-image: url('{{ asset('uploads/story/kingdom/gallery/galleries/' . $gallery5->kingdom_galleries4_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $gallery5->kingdom_galleries4_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $gallery5->kingdom_galleries4_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content text-black scroll">{!! nl2br(e( $gallery5->kingdom_galleries4_description )) !!}</div>
                </div>
            </div>

            <div class="option">
                <div class="image @if($gallery6) bg-active @endif" style="@if($gallery6) background-image: url('{{ asset('uploads/story/kingdom/gallery/galleries/' . $gallery6->kingdom_galleries5_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $gallery6->kingdom_galleries5_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $gallery6->kingdom_galleries5_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content text-black scroll">
                        {!! nl2br(e( $gallery6->kingdom_galleries5_description )) !!}
                    </div>
                </div>
            </div>

            <div class="option">
                <div class="image @if($gallery7) bg-active @endif" style="@if($gallery7) background-image: url('{{ asset('uploads/story/kingdom/gallery/galleries/' . $gallery7->kingdom_galleries6_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $gallery7->kingdom_galleries6_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $gallery7->kingdom_galleries6_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content text-black scroll">{!! nl2br(e( $gallery7->kingdom_galleries6_description )) !!}</div>
                </div>
            </div>

            <div class="option">
                <div class="image @if($gallery8) bg-active @endif" style="@if($gallery8) background-image: url('{{ asset('uploads/story/kingdom/gallery/galleries/' . $gallery8->kingdom_galleries7_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $gallery8->kingdom_galleries7_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $gallery8->kingdom_galleries7_subtitle )) !!}</div>

                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content text-black scroll">{!! nl2br(e( $gallery8->kingdom_galleries7_description )) !!}</div>
                </div>
            </div>

            <div class="option">
                <div class="image @if($gallery9) bg-active @endif" style="@if($gallery9) background-image: url('{{ asset('uploads/story/kingdom/gallery/galleries/' . $gallery9->kingdom_galleries8_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $gallery9->kingdom_galleries8_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $gallery9->kingdom_galleries8_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>

                <div class="description">
                    <div class="image-content text-black scroll">{!! nl2br(e( $gallery9->kingdom_galleries8_description )) !!}</div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-white">the <span class="text-uppercase"
    @if($kingdom_home)
            class="story-header-text">{{ $kingdom_home->kingdom_home_title }}

    @endif
    </span></h1>
    @if($kingdom_home)
        @php
            $backgroundImageUrl = asset('uploads/story/kingdom/kingdom_home/' . $kingdom_home->kingdom_home_image);
        @endphp
        <style>
            .the-kingdom2  {
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
