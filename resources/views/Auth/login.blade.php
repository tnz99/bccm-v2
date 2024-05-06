@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - Climate Change Museum</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <style>
    .login-btn {
        background-color: #194B46;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        padding: 10px 20px;
        /* Adjust padding as needed */
        transition: background-color 0.3s ease;
        width: 100%;
        /* Set a fixed width for the buttons */
    }

    .login-btn:hover {
        background-color: #FCFF5C;
    }

    .card-titles {
        color: #194B46;

    }

    /* Internal CSS for the image */
    .login-image {
        max-height: 100%;
        max-width: 100%;
        margin-bottom: 0;
        margin-left: 26px;
        
    }

    </style>


</head>

<body>

    <main style="background-color: #194B46;">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <!-- Image Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="cards mb-3">
                        <div class="text-center">
                            <img src="assets/img/Frame 3.svg" alt="" class="login-image">
                        </div>
                    </div>
                </div>
                <!-- Login Card Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ url('') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/Group 3.svg" alt="">


                                </a>
                            </div><!-- End Logo -->

                            <div class="pt-2 pb-0">
                                <h5 class="card-titles pb-0 fs-7">Welcome</h5>
                                <p class="text-start small">Sign in to continue</p>
                            </div>


                            @include('_message')

                            <form class="row g-3" action="" method="post">
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label for="email" class="form-label text-md-end">{{ __('Email Address') }}</label>
                                    <div class="input-group has-validation">
                                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label text-md-end">{{ __('Password') }}</label>
                                    <input type="password" name="password"
                                        class="form-control  @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" id="yourPassword" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" value="true"
                                            id="rememberMe " {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="rememberMe">
                                            {{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn login-btn" type="submit">Login</button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>




                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
