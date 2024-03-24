document.addEventListener("DOMContentLoaded", function() {
    var parallaxSection = document.querySelector('.natural');
    var parallaxAmount = 0.5; // Ajusta la cantidad de paralaje según sea necesario

    window.addEventListener('scroll', function() {
        var scrollPosition = window.pageYOffset;
        parallaxSection.style.backgroundPositionY = -(scrollPosition * parallaxAmount) + 'px';
    });
});