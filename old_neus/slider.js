let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    // Asegurarse de que el índice esté dentro del rango
    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }

    // Mover las slides
    const offset = -currentSlide * 100;
    slides.forEach(slide => {
        slide.style.transform = `translateX(${offset}%)`;
    });
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

function changeCourse() {
    const course = document.getElementById('courseDropdown').value;
    // Aquí puedes agregar lógica para cargar lecciones del curso seleccionado
    console.log("Curso seleccionado:", course);
}

// Mostrar la primera slide al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
});
