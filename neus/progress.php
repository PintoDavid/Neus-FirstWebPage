<?php
// progress.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progreso - NEUS</title>
    <link rel="stylesheet" href="styles.css"> <!-- CSS general -->
    <script src="slider.js"></script> <!-- JavaScript para el slider -->
</head>
<body>
    <?php include 'menu.php'; ?> <!-- Cargar el menú -->
    <main class="progress-container">
        <h1>Progreso del Curso</h1>
        <select id="courseDropdown" onchange="changeCourse()">
            <option value="algebra">Álgebra Lineal</option>
            <option value="calculo">Cálculo Diferencial</option>
            <!-- Agregar más opciones de curso según sea necesario -->
        </select>
        <div class="slider">
            <div class="slide">
                <h2>Lección 1: Introducción al Álgebra</h2>
                <p>Descripción de la lección y contenido.</p>
            </div>
            <div class="slide">
                <h2>Lección 2: Operaciones Básicas</h2>
                <p>Descripción de la lección y contenido.</p>
            </div>
            <div class="slide">
                <h2>Lección 3: Sistemas de Ecuaciones</h2>
                <p>Descripción de la lección y contenido.</p>
            </div>
            <!-- Añadir más lecciones según sea necesario -->
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </main>
</body>
</html>
