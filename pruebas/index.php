<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingreso</title>  
    <link rel="stylesheet" href="http://localhost/estudiarphp/pruebas/vista/css/inicio.css">    
</head>

<body>
<div class="container">
    <div class="navegacion">
        <a href="http://localhost/estudiarphp/mvc/vistas/index.html" id="boton_web">Web a evaluar aquí</a>
        <div id="menu_botones">
            <a href="registro.php">Registrarse</a>
            <a href="informe.html">informe</a>
        </div>
    </div>
    
    <div id="login-box">
        <form name="ingreso" method="post" action="ingreso.php">
            <h1>Ingreso</h1>
                <input type="text" name="usuario" placeholder="usuario"/>
                <br>
                <input type="password" name="clave" placeholder="clave"/>
                <br>
                <br>
                <input type="email" name="correo" placeholder="correo"/>        
                <br>
                <br>
                <input type="submit" name="ingresar" value="ingresar"/>
        </form>
    </div>

    
    

    <div id="informacion">
        <p>Debes estar registrado para poder acceder a las pruebas de testeo, si no estás registrado en el botón de registro que está arriba lo podrás hacer</p>
    </div>
</body>

</html>