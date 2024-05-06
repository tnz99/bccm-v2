@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Forgot - Climate Change Museum</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <style>
    body {
        background-color: #194B46;
    }

    main {
        margin-top: 1.5rem;
    }

    .container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-width: 50vh;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
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
        width: 98%;
        margin-top: 10px;
    }

    .btn {
        background-color: #194B46;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        padding: 10px 20px;
        /* Adjust padding as needed */
        transition: background-color 0.3s ease;
        width: 120px;
        /* Set a fixed width for the buttons */
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .btn-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    </style>

</head>

<body>

    <main>
        <div class="container">

            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title card-header">{{ __('Reset Password') }}</h5>
                                    <p class="card-text">Password reset link will be sent to your registered email.</p>
                                </div>
                                <!-- <div class="card-header">{{ __('Reset Password') }}</div> -->

                                <div class="card-body">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4 btn-container">
                                                <button type="submit" class="btn">
                                                    {{ __('Send') }}
                                                </button>
                                                <button class="btn" type="button"
                                                    onclick="window.location.href='{{ route('login') }}'">{{ __('Cancel')}}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
@endsection