@extends('components.layout')

@section('header')
    <link rel="stylesheet" href="/css/spring.css" />
    <x-header :dark=$darkThemeFlag />
@endsection

@section('body_class', 'register-background')

@section('content')
<section class="register-form-wrapper story-section spring-animation">
    <div class="register-form-container">
        <h4 class="{{ $darkThemeFlag ? 'text-white' : 'text-black' }} fw-400 ">Dont miss the latest updates!</h4>

        <form class="d-flex flex-column align-items-start register-form" method="POST" action="/register">
            @csrf
            <div class="form-group">
                <input id="name" type="text" class="registration-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {{-- <input id="country" type="text" class="registration-input form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus placeholder="Country"> --}}
                <style>
                    /* Basic styling for the custom dropdown */
                    .custom-dropdown {
                        position: relative;
                        display: inline-block;
                    }
            
                    .custom-dropdown select {
                        padding: 10px;
                        font-size: 16px;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                    }
            
                    /* Styling for the custom arrow icon */
                    .custom-dropdown::after {
                        content: '\25BC'; /* Unicode character for a down arrow */
                        position: absolute;
                        top: 50%;
                        right: 10px;
                        transform: translateY(-50%);
                        font-size: 18px;
                    }
                </style>
              
                       <div class="form-group">
                         <input id="email" type="email" class="registration-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                         
                         @error('email')
                         <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                       </div>


                {{-- <div class="form-group"> --}}
                    <select id="country" class="custom-dropdown registration-input form-control @error('country') is-invalid @enderror" name="country" required autocomplete="country" autofocus style="padding-left: 45px;">
    <option value="" disabled selected>Select Country</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Brunei">Brunei</option>
    <option value="Cambodia">Cambodia</option>
    <option value="China">China</option>
    <option value="Dubai">Dubai</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran</option>
    <option value="Iraq">Iraq</option>
    <option value="Israel">Israel</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Myanmar (Burma)">Myanmar (Burma)</option>
    <option value="Nepal">Nepal</option>
    <option value="North Korea">North Korea</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palestine">Palestine</option>
    <option value="Philippines">Philippines</option>
    <option value="Qatar">Qatar</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Singapore">Singapore</option>
    <option value="South Korea">South Korea</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Syria">Syria</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Thailand">Thailand</option>
    <option value="Turkey">Turkey</option>
    <option value="United Arab Emirates (UAE)">United Arab Emirates (UAE)</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Yemen">Yemen</option>
    <!-- Add more countries as needed -->
</select>

                
                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- </div> --}}
            </div>

   

            <div class="d-flex justify-content-start align-item-center form-check form-check-inline">
                <input class="form-check-input form-check-input-box" type="checkbox" id="inlineCheckbox2" value="option2" required>
                <span class="form-check-label check-label-text" for="inlineCheckbox2">
                    I agree with the <a href="/pdf/termscondition.pdf?v=20230101120002" class="terms-condition" target="_blank">terms & conditions </a>
                </span>
            </div>

            <button id='rotate-icon' type="submit" class="register-btn no-underline text-dark register-text">
                {{ __('Register') }}
                <svg class="register-icon" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0001 0C17.5636 0 18.1042 0.222427 18.5026 0.618324L33.3777 15.3961C34.2075 16.2205 34.2075 17.5573 33.3777 18.3817C32.5479 19.206 31.2023 19.206 30.3725 18.3817L19.1251 7.20778V35.8889C19.1251 37.0549 18.1737 38 17.0001 38C15.8264 38 14.875 37.0549 14.875 35.8889V7.20778L3.62762 18.3817C2.79774 19.206 1.45227 19.206 0.622393 18.3817C-0.207464 17.5573 -0.207464 16.2205 0.622393 15.3961L15.4975 0.618324C15.8959 0.222427 16.4365 0 17.0001 0Z" fill="black"/>
                    <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 0.704783 -0.709422 -0.704783 17 12.6667)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                    <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 -0.704783 -0.709422 0.704783 25.5001 27.0222)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </button>
        </form>

        @if(session('success'))
        <div class="register-success-wrapper">
            <h2 class="register-success-text">Fantastic!</h2>
            <p class="register-success-subtext">Your registration is confirmed.</p>
            <p class="register-success-subtext">Thanks for singing up.</p>
        </div>
        @endif
    </div>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav background="the-spring-cnav-bg" inner-border="border-white"/>
    <script src="/js/spring.js"></script>

    <script>
        var sakura = new Sakura('body', {
            colors: [
            {
                gradientColorStart: 'rgba(255, 183, 197, 0.9)',
                gradientColorEnd: 'rgba(255, 197, 208, 0.9)',
                gradientColorDegree: 120,
            },
            {
                gradientColorStart: 'rgba(255,189,189)',
                gradientColorEnd: 'rgba(227,170,181)',
                gradientColorDegree: 120,
            },
            {
                gradientColorStart: 'rgba(212,152,163)',
                gradientColorEnd: 'rgba(242,185,196)',
                gradientColorDegree: 120,
            },
            ]
        });
    </script>

   
@endsection