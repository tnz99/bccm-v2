// let prayerWheel = document.getElementById('prayer-wheel');
// let spinButton = document.getElementByClass('spin-button');

// let prayerWheelFrames = [
//  'images/prayer-wheel/1.png',
//  'images/prayer-wheel/2.png',
//  'images/prayer-wheel/3.png',
//  'images/prayer-wheel/4.png',
//  'images/prayer-wheel/5.png',
//  'images/prayer-wheel/6.png'
// ];

// let currentFrameIndex = 0;

// function spin() {
//  currentFrameIndex++;
 
//  if (currentFrameIndex >= prayerWheelFrames.length) {
//    currentFrameIndex = 0;
//  }
 
//  prayerWheel.src = prayerWheelFrames[currentFrameIndex];
// }

// document.getElementById('prev-button').addEventListener('click', spinPrev);

// function spinPrev() {
//     currentFrameIndex++;
//  if (currentFrameIndex >= prayerWheelFrames.length) {
//     currentFrameIndex = 0;
//  }
//  prayerWheel.src = prayerWheelFrames[currentFrameIndex];
// }

// spinButton.addEventListener('click', spin);

$(function(){
   let prayerWheel = $('#prayer-wheel');

   let prayerWheelFrames = [
      '/images/prayer-wheel/1.png',
      '/images/prayer-wheel/2.png',
      '/images/prayer-wheel/3.png',
      '/images/prayer-wheel/4.png',
      '/images/prayer-wheel/5.png',
      '/images/prayer-wheel/6.png',
      '/images/prayer-wheel/1.png',
      '/images/prayer-wheel/2.png',
      '/images/prayer-wheel/3.png',
      '/images/prayer-wheel/4.png',
      '/images/prayer-wheel/5.png'
   ];
     
   // let currentFrameIndex = 0;

   function spinwheel(index) {
      if (index < prayerWheelFrames.length) {
        // Process the current element
        // console.log("Index: " + index + ", Value: " + prayerWheelFrames[index]);
        prayerWheel.attr("src", prayerWheelFrames[index]);

        // Increment the index for the next iteration
        index++;

        // Set a delay using setTimeout
        setTimeout(function() {
          // Call the function recursively after the delay
          spinwheel(index);
        }, 100); // 1000 milliseconds = 1 second
      }
    }

   // $('.spin-button').click(function() {
   //    // currentFrameIndex++;
   //    // if (currentFrameIndex >= prayerWheelFrames.length) {
   //    //    currentFrameIndex = 0;
   //    // }
   
   //    // prayerWheel.attr("src", prayerWheelFrames[currentFrameIndex]);
   //    spinwheel(0)
   // })
   spinwheel(0)

});
