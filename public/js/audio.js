// keep playing
document.addEventListener("DOMContentLoaded", function () {
    const audio = document.getElementById("audio");
    const playPauseButton = document.getElementById("play-pause-button");

    playPauseButton.addEventListener("click", function () {
        if (audio.paused) {
            playAudio();
        } else {
            pauseAudio();
        }
    });

    audio.addEventListener("ended", function () {
        // Automatically replay the audio when it reaches the end
        playAudio();
    });

    // Function to play the audio and update the button
    function playAudio() {
        audio.play();
        playPauseButton.classList.remove("paused");
    }

    // Function to pause the audio and update the button
    function pauseAudio() {
        audio.pause();
        playPauseButton.classList.add("paused");
    }

    // Start playing the audio initially
    playAudio();
});



// document.addEventListener("DOMContentLoaded", function () {
//     const audio = document.getElementById("audio");
//     const playPauseButton = document.getElementById("play-pause-button");

//     playPauseButton.addEventListener("click", function () {
//         if (audio.paused) {
//             playAudio();
//         } else {
//             pauseAudio();
//         }
//     });

//     audio.addEventListener("ended", function () {
//         // Automatically replay the audio when it reaches the end
//         playAudio();
//     });

//     // Function to play the audio and update the button
//     function playAudio() {
//         audio.play();
//         playPauseButton.classList.remove("paused");
//     }

//     // Function to pause the audio and update the button
//     function pauseAudio() {
//         audio.pause();
//         playPauseButton.classList.add("paused");
//     }
// });








