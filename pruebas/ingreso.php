<?php
include("controlador/conexion.php");

if (isset($_POST['ingresar'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $correo = $_POST['correo'];

    $stmt = $conex->prepare("SELECT * FROM datos WHERE usuario=? AND clave=? AND correo=?");
    $stmt->bind_param("sss", $usuario, $clave, $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<script>alert("Bienvenido")</script>';
        echo '<script>window.location = "../pruebas/Testeador.php";</script>';
        exit;
    } else {
        echo '<script>alert("Usuario no existe")</script>';
        echo'<script>window.location = "index.php";</script>';
        exit;
    }
} else {
    echo "Formulario no enviado";
}
?>