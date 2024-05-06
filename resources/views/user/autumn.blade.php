@extends('components.layout')
@section('body_class',$bodyClass)
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<section class="d-flex flex-column z-3 story-section">
    <div class="{{ $darkThemeFlag ? 'text-white' : 'text-black' }} story-header">
        <h2 class="story-header-text">the</h2>
        <h2 class="story-header-text">{{ $name }}</h2>
        <p class="story-header-description">{{ $description }}</p>
    </div>
</section>
@endsection

@section('footer')
<footer class="footer">
    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag/>
</footer>
@endsection

@section('nav')
<script>
        // var colors = ["#227C70", "#FFBF00"];
    var colors = ["#227C70", "#FFBF00","#0002A1"];

    var id = null;
    function frame() {
        confetti({
            particleCount: 2,
            angle: 60,
            spread: 55,
            origin: { x: 0 },
            colors: colors,
        });
        confetti({
            particleCount: 2,
            angle: 120,
            spread: 55,
            origin: { x: 1 },
            colors: colors,
        });

        if (Date.now() < Date.now() + 15000) {
            id =  requestAnimationFrame(frame);
        }
    }

    window.onload = snow();
    

    $(document).ready(function() {
           
        $("#b-close").click(function() {
            // alert("page is loaded");
            $(".popup_this_container").hide();
            window.cancelAnimationFrame(id);
        });
    });

    function stop(){
        window.cancelAnimationFrame(id);

        setTimeout(() => {
        confetti.reset();
    }, 100);
}

function fireworks() {
        var duration = 25 * 1000;
        var animationEnd = Date.now() + duration;
        var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

        function randomInRange(min, max) {
          return Math.random() * (max - min) + min;
        }

        var interval = setInterval(function () {
          var timeLeft = animationEnd - Date.now();

          if (timeLeft <= 0) {
            return clearInterval(interval);
          }

          var particleCount = 50 * (timeLeft / duration);
          // since particles fall down, start a bit higher than random
          confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } }));
          confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } }));
        }, 250);
      }

  function snow() {
    function randomInRange(min, max) {
        return Math.random() * (max - min) + min;
    }

    (function frame() {
        confetti({
            particleCount: 1,
            startVelocity: 0,
            ticks: 500, // Adjust the number of ticks as needed
            origin: {
                x: Math.random(),
                y: Math.random() - 0.2
            },
            colors: ['#FF5722'],
            shapes: ['circle'],
            gravity: randomInRange(0.4, 0.6),
            scalar: randomInRange(0.4, 1),
            drift: randomInRange(-0.4, 0.4)
        });

        // Call the next frame
        requestAnimationFrame(frame);
    }());
}
</script>
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection
