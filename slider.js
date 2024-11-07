// slider.js
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

function changeCourse() {
    const dropdown = document.getElementById('courseDropdown');
    const selectedCourse = dropdown.value;
    // Aquí puedes cargar lecciones según el curso seleccionado
    // Lógica para cargar las lecciones basadas en el curso
}

// Inicializa el primer slide
showSlide(currentSlide);
