@extends('components.layout')
@section('body_class', 'the-mammals2')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="story-section gallery-wrapper">
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background: #eab676">
                <div class="image @if($fauna_page3_gallery1) bg-active @endif" style="@if($fauna_page3_gallery1) background-image: url('{{ asset('uploads/story/fauna/fauna_page3/gallery1/' . $fauna_page3_gallery1->fauna_page3_gallery1_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $fauna_page3_gallery1->fauna_page3_gallery1_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $fauna_page3_gallery1->fauna_page3_gallery1_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $fauna_page3_gallery1->fauna_page3_gallery1_description )) !!}</div>
                </div>
            </div>

            <div class="option" style="background: #eab676">
                <div class="image @if($fauna_page3_gallery2) bg-active @endif" style="@if($fauna_page3_gallery2) background-image: url('{{ asset('uploads/story/fauna/fauna_page3/gallery2/' . $fauna_page3_gallery2->fauna_page3_gallery2_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $fauna_page3_gallery2->fauna_page3_gallery2_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $fauna_page3_gallery2->fauna_page3_gallery2_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $fauna_page3_gallery2->fauna_page3_gallery2_description )) !!}</div>
                </div>
            </div>

            <div class="option" style="background: #eab676">
                <div class="image @if($fauna_page3_gallery3) bg-active @endif" style="@if($fauna_page3_gallery3) background-image: url('{{ asset('uploads/story/fauna/fauna_page3/gallery3/' . $fauna_page3_gallery3->fauna_page3_gallery3_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $fauna_page3_gallery3->fauna_page3_gallery3_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $fauna_page3_gallery3->fauna_page3_gallery3_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $fauna_page3_gallery3->fauna_page3_gallery3_description )) !!}</div>
                </div>
            </div>



            <div class="option" style="background: #eab676">
                <div class="image @if($fauna_page3_gallery4) bg-active @endif" style="@if($fauna_page3_gallery4) background-image: url('{{ asset('uploads/story/fauna/fauna_page3/gallery4/' . $fauna_page3_gallery4->fauna_page3_gallery4_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $fauna_page3_gallery4->fauna_page3_gallery4_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $fauna_page3_gallery4->fauna_page3_gallery4_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $fauna_page3_gallery4->fauna_page3_gallery4_description )) !!}</div>
                </div>
            </div>

            <div class="option" style="background: #eab676">
                <div class="image @if($fauna_page3_gallery5) bg-active @endif" style="@if($fauna_page3_gallery5) background-image: url('{{ asset('uploads/story/fauna/fauna_page3/gallery5/' . $fauna_page3_gallery5->fauna_page3_gallery5_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $fauna_page3_gallery5->fauna_page3_gallery5_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $fauna_page3_gallery5->fauna_page3_gallery5_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $fauna_page3_gallery5->fauna_page3_gallery5_description )) !!}</div>
                </div>
            </div>

            <div class="option" style="background: #eab676">
                <div class="image @if($fauna_page3_gallery6) bg-active @endif" style="@if($fauna_page3_gallery6) background-image: url('{{ asset('uploads/story/fauna/fauna_page3/gallery6/' . $fauna_page3_gallery6->fauna_page3_gallery6_image) }}'); @endif">
                    <div class="label">
                        <div class="info">
                            <div class="main">{!! nl2br(e( $fauna_page3_gallery6->fauna_page3_gallery6_title )) !!}</div>
                            <div class="sub">{!! nl2br(e( $fauna_page3_gallery6->fauna_page3_gallery6_subtitle )) !!}</div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">{!! nl2br(e( $fauna_page3_gallery6->fauna_page3_gallery6_description )) !!}</div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-white">the <span class="text-uppercase"
        @if($fauna_page2)
                class="story-header-text">{{ $fauna_page2->fauna_page2_title }}

        @endif
    </span></h1>

    @if($fauna_page2)
    @php
        $backgroundImageUrl = asset('uploads/story/fauna/fauna_page2/' . $fauna_page2->fauna_page2_image);
    @endphp
    <style>
        .the-mammals2  {
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
