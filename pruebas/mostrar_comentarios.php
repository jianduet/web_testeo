<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="http://localhost/estudiarphp/pruebas/vista/css/comentarios.css">
</head>
<body>

<?php
include("controlador/conexion_comentarios.php");

// Consulta para obtener todos los comentarios
$sql = "SELECT * FROM comentarios_bd ORDER BY fecha DESC";
$result = $conex->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Comentarios</h1>";

    // Contar el número de comentarios
    $total_comentarios = $result->num_rows;
    echo "<p>Total de comentarios: " . $total_comentarios . "</p>";

    while ($row = $result->fetch_assoc()) {
        // Mostrar los comentarios
        echo "<div class='comentario'>";
        echo "<p><strong>Nombre:</strong> " . $row['nombre'] . "</p>";
        echo "<p><strong>Módulo:</strong> " . $row['atributos'] . "</p>";
        echo "<p><strong>Descripción:</strong> " . $row['descripcion'] . "</p>";
        echo "<p><strong>Prioridad:</strong> " . $row['prioridad'] . "</p>";
        echo "<p><strong>Calificación:</strong> " . $row['puntuacion'] . "</p>";
        echo "<p><strong>Fecha:</strong> " . $row['fecha'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No hay comentarios disponibles.";
}
?>
<div id="ver_comentarios"><a href="Testeador.php">Volver</a></div>
</body>
</html>