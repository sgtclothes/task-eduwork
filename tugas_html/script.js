const carousel = document.querySelector('.carousel');
let translateX = 0;

function slideLeft() {
    const slideWidth = document.querySelector('.slide').offsetWidth;
    const numSlides = document.querySelectorAll('.slide').length;
    const maxWidth = -(slideWidth * (numSlides - 1));

    if (translateX <= maxWidth) {
        translateX = 0;
    } else {
        translateX -= slideWidth;
    }

    carousel.style.transform = `translateX(${translateX}px)`;
}

setInterval(slideLeft, 3000); // Auto slide every 3 seconds
