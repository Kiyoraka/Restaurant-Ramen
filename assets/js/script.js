let slideIndex = 0;
const slides = document.querySelectorAll(".slide");
const totalSlides = slides.length;

function showSlide(index) {
    // Hide all slides
    slides.forEach(slide => slide.style.display = "none");

    // Show the slide at the current index
    slides[index].style.display = "block";
}

function moveSlide(direction) {
    slideIndex += direction;

    // Wrap around if we go past the first or last slide
    if (slideIndex < 0) {
        slideIndex = totalSlides - 1;
    } else if (slideIndex >= totalSlides) {
        slideIndex = 0;
    }

    showSlide(slideIndex);
}

// Initialize the slider
document.addEventListener("DOMContentLoaded", () => {
    showSlide(slideIndex);
});
