<?php
    if(!empty($_POST['registrar'])){
        if(empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["edad"]) or empty($_POST["usuario"]) or empty($_POST["clave"]) or empty($_POST["correo"])) {
            echo "hay campos vacios";
        } else {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $edad = trim($_POST['edad']);
            $usuario = trim($_POST['usuario']);
            $clave = trim($_POST['clave']);
            $correo = trim($_POST['correo']);
            $fecha = date("d/m/y");

            $consulta = "INSERT INTO datos(nombre, apellido, edad, usuario, clave, correo, fecha)
            VALUES('$nombre', '$apellido', '$edad', '$usuario', '$clave', '$correo', '$fecha')";

            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
            
            ?>

            <script>
            alert("tú registro se a completado")
            window.location = "../pruebas/index.php"</script>

        <?php
               
            } else {
        ?>
                <h3>no se pudo registrar</h3>
        <?php
            }

            } 

    mysqli_close($conex);
        }
    
?>