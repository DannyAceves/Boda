function countdown() {
    var now = new Date();
    var targetDate = new Date("May 4, 2024 18:00:00").getTime(); // 4 de mayo de 2024 a las 6:00 p.m.
    
    var distance = targetDate - now.getTime();
    
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
    
    if (distance < 0) {
      clearInterval(timerInterval);
      document.getElementById("timer").innerHTML = "¡Es hora!";
    }
  }
  
  var timerInterval = setInterval(countdown, 1000);
  
  countdown();