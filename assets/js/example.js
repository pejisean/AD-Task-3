var makeItRain = function() {
  // Clear front row rain container
  $('.rain.front-row').empty();

  var increment = 0;
  var drops = "";

  while (increment < 100) {
    var randoHundo = Math.floor(Math.random() * 98) + 1; // 1 to 98
    var randoFiver = Math.floor(Math.random() * 4) + 2;  // 2 to 5
    increment += randoFiver;

    drops += '<div class="drop" style="left: ' + increment + '%; bottom: ' + (randoFiver * 2 - 1 + 100) + '%; animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;">' +
               '<div class="stem" style="animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"></div>' +
               '<div class="splat" style="animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"></div>' +
             '</div>';
  }

  $('.rain.front-row').append(drops);
}

// Run once on page load
window.onload = function(){
    makeItRain();
}