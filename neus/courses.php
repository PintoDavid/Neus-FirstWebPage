<?php
// courses.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Cursos - NEUS</title>
    <link rel="stylesheet" href="styles.css"> <!-- CSS general -->
</head>
<body>
    <?php include 'menu.php'; ?> <!-- Cargar el menú -->
    <main class="courses-container">
        <h1>Mis Cursos</h1>
        <div class="course-card">
            <img src="course-icon1.png" alt="Curso de Álgebra" class="course-icon">
            <h2>Álgebra Lineal</h2>
            <p>Aprende los conceptos básicos de álgebra lineal y sus aplicaciones.</p>
            <p class="total-lessons">Total de lecciones: 10</p>
            <button onclick="window.location.href='progress.php?course=algebra'">Ir al Curso</button>
        </div>
        <div class="course-card">
            <img src="course-icon2.png" alt="Curso de Cálculo" class="course-icon">
            <h2>Cálculo Diferencial</h2>
            <p>Explora los principios del cálculo diferencial y su aplicación en problemas reales.</p>
            <p class="total-lessons">Total de lecciones: 8</p>
            <button onclick="window.location.href='progress.php?course=calculo'">Ir al Curso</button>
        </div>
        <!-- Añadir más cursos según sea necesario -->
    </main>
</body>
</html>
