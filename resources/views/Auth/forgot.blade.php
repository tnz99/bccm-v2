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
        width: 100%;
    }

    .btn {
        background-color: #007bff;
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
                                    <h5 class="card-title">Reset your password</h5>
                                    <p class="card-text">Password reset link will be sent to your registered email.</p>
                                </div>

                                <form action="{{url('forgot_post')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Email</label>
                                        
                                        <div class="input-group has-validation">
                                        <br/>
                                            <input type="text" name="email" class="form-control" id="yourEmail"
                                                placeholder="Please enter your registered email" required>
                                            <!-- Remove the div with class "invalid-feedback" -->
                                        </div>
                                    </div>


                                    <div class="btn-container">
                                        <button class="btn" type="submit">Send</button>
                                        <button class="btn" type="submit">Cancel</button>
                                    </div>

                                </form>
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