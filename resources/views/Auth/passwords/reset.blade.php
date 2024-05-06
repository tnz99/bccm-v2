@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Reset Password - Climate Change Museum</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Internal CSS -->
    <style>
    body {
        background-color: #194B46;
    }

    main {
        margin-top: 1.5rem;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        /* Increased padding */
        width: 400px;
        /* Increased width */
        max-width: 90%;
        /* Ensures it doesn't exceed the viewport width */
    }

    .card-header {
        margin-bottom: 10px;
        text-align: center;
        font-weight: bold;
        /* Added */
        font-size: 20px;
        /* Added */
    }

    .card h5 {
        text-align: center;
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .card p {
        text-align: center;
        font-size: 1rem;
        margin-bottom: 20px;
    }

    .form-label {
        color: #000;
        font-weight: bold;
    }

    .form-control {
        width: calc(100% - 20px);
        /* Adjusted width to accommodate space */
        margin-bottom: 10px;
        /* Added margin bottom */
        padding: 10px;
        /* Added padding */
        margin-top: 5px;
    }


    .btn {
        background-color: #194B46;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        /* Center horizontally */
        margin-top: 20px;
    }
    </style>

</head>

<body>

    <main>
        <div class="container"
            style="min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Reset Password') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $email ?? old('email') }}" required autocomplete="email"
                                            autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="btn-container">
                                    
                                        <!-- Adjusted column width -->
                                        <button type="submit" class="btn">
                                            {{ __('Reset Password') }}
                                        </button>
                                    
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>