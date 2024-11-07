<?php
// index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio - NEUS</title>
    <link rel="stylesheet" href="styles.css"> <!-- CSS general -->
</head>
<body>
    <?php include 'menu.php'; ?> <!-- Cargar el menú -->
    <main>
        <h1>Bienvenido a NEUS</h1>
        <p>Explora nuestros cursos y mejora tus habilidades.</p>
        <button onclick="window.location.href='courses.php'">Ver Cursos</button>
    </main>
</body>
</html>
