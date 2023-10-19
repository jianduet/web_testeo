<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>  
    <link rel="stylesheet" href="http://localhost/estudiarphp/pruebas/vista/css/registro.css">    
</head>

<body>
<div class="container">
    <div class="navegacion">
            <a href="http://localhost/estudiarphp/mvc/vistas/index.html" id="boton_web">Web a evaluar aquí</a>
            <div id="menu_botones">
                <a href="index.php">ingresar</a>
                <a href="informe.html">informe</a>
            </div>
    </div>

    <div id="login-box">
        <form name="registro" method="post">
            <h1>Registro</h1>
        <?php 
        include("registrar.php");
        ?>
        <br>
            <input type="text" name="nombre" placeholder="nombre"/>
            <input type="text" name="apellido" placeholder="apellido"/>
            <input type="text" name="edad" placeholder="edad"/>
            <input type="text" name="usuario" placeholder="usuario"/>
            <br>
            <input type="password" name="clave" placeholder="clave"/>
            <br>
            <br>
            <input type="email" name="correo" placeholder="correo"/>
            <br>
            <br>
            <input type="submit" name="registrar" value="registrar"/>
            <br>
            <input type="reset" name="" value="limpiar" />
            <br>
            <br>
        </form>
    </div>


</div>
</body>

</html>