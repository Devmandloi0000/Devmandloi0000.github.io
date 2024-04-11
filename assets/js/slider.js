// Get all slide elements
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

// Function to show a specific slide
function showSlide(index) {
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.classList.add('active');
        } else {
            slide.classList.remove('active');
        }
    });
}

// Automatically switch to the next slide every few seconds (adjust the interval as needed)
setInterval(() => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}, 2000); // Switch every 5 seconds
