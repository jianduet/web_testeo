<?php
    include("controlador/conexion_comentarios.php");
    
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $atributos = $_POST['atributos'];
        $descripcion = $_POST['descripcion'];
        $prioridad = $_POST['prioridad'];
        $puntuacion = $_POST['rango'];
    
        $stmt = $conex->prepare("INSERT INTO comentarios_bd (nombre, atributos, descripcion, prioridad, puntuacion) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $nombre, $atributos, $descripcion, $prioridad, $puntuacion);
    
        if ($stmt->execute()) {
            echo "Comentario enviado con éxito.";
        } else {
            echo "Error al enviar el comentario.";
        }
        $stmt->close();
    
        // Calcular el promedio de calificación
        $sql = "SELECT AVG(puntuacion) AS promedio FROM comentarios_bd";
        $result = $conex->query($sql);
        $row = $result->fetch_assoc();
        $promedio = number_format($row['promedio'], 2, '.', '');
    
        // Almacenar el promedio en una variable de sesión
        session_start();
        $_SESSION['promedio_calificacion'] = $promedio;
        
    }
    echo '<script>alert("Comentario enviado con exito")</script>';
    echo'<script>window.location = "Testeador.php";</script>';
?>


