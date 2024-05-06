<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">

    <title>BCCM | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

    <link rel="stylesheet" type="text/css" href="/css/main.css?v=20230101120008">
    <link rel="stylesheet" type="text/css" href="/css/circular-nav.css?v=20230101120008">
    <link rel="stylesheet" type="text/css" href="/css/audio.css?v=20230101120008">
    <link rel="stylesheet" type="text/css" href="/css/prayerwheel.css?v=20230101120008" />
    <link rel="stylesheet" type="text/css" href="/css/image-gallery.css?v=20230101120008">
    <link rel="stylesheet" type="text/css" href="/css/mobile.css?v=20230101120008">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

  <body class=@yield('body_class')>
    <div class="wrapper">
        @yield('header')
        @yield('content')
        @yield('footer')
        @yield('nav')
        <button id="story-nav-btn" class="zoom-in-element open-btn">Our Story</button>
    </div>

    <script src="/js/circular-nav.js"></script>
    <script src="/js/audio.js"></script>
    <script src="/js/prayerwheel.js"></script>
    <script src="/js/nav.js"></script>
    <script src="/js/gallery.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
