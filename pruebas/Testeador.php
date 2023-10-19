<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruebas</title>
    <link rel="stylesheet" href="http://localhost/estudiarphp/pruebas/vista/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header class="navegacion">
            <ul id="menu_botones">
                <li><a href="http://localhost/estudiarphp/mvc/vistas/index.html" target="_blank">Web a evaluar aquí</a></li>
                <li><a href="salir.php">Salir</a></li>
            </ul>
        </header>
    
        
        <div id="informacion">
                <h1>Testeador</h1>
        <?php
        include("controlador/conexion_comentarios.php");
        ?>
            <p>Tener en cuenta</p>
            <p>Pruebas de navegación: Verificar que todas las páginas sean accesibles a través de enlaces y que la navegación sea intuitiva.</p>
            <p>Pruebas de formulario: Asegurarte de que los formularios funcionen correctamente, validando la entrada de datos, envío de datos y respuestas.</p>
            <p>Pruebas de enlaces: Comprobar que todos los enlaces internos y externos estén funcionando y llevando a las páginas correctas.</p>
            <p>Pruebas de rendimiento: Evaluar cómo se comporta la página bajo diferentes cargas de tráfico.

            Pruebas de rendimiento en dispositivos móviles: Asegurarte de que la página sea receptiva y se vea bien en dispositivos móviles.</p>
            <p>Pruebas de compatibilidad: Verificar que la página se muestre correctamente en los navegadores más utilizados, como Chrome, Firefox, Safari, Edge, etc.</p>
            <p>Pruebas de usabilidad: Evaluar la usabilidad general de la página, la disposición de elementos, la legibilidad del texto, etc.</p>

        </div>
    
        <div id="contador">
            <div class="contador_comentarios">
                <?php
                    $sql = "SELECT * FROM comentarios_bd";
                    $result = $conex->query($sql);

                    $total_comentarios = $result->num_rows; 
                    echo "<p>Total de comentarios: " . $total_comentarios . "</p>";
                ?>
            </div>

            <div class="contador_puntuacion">
                <?php
                    

                    session_start();
                    if (isset($_SESSION['promedio_calificacion'])) {
                        echo "Promedio de calificación: " . $_SESSION['promedio_calificacion'];
                    }
                ?>
            </div>
        </div>

    
        <div id="principal">
            <form action="procesar_comentario.php" method="post">
                <hr>
                <br>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
                <br>
                <label for="atributos">Selecciona el módulo donde encontraste el error:</label>
                <select name="atributos" id="atributos">
                    <option value="0">...</option>
                    <option value="index">index</option>
                    <option value="categorias">Categorías</option>
                    <option value="dudas">Pruebas de rendimiento</option>
                    <option value="premium">Versión sin anuncios</option>
                    <option value="entrar_salir">ingreso y registro</option>
                </select>
                <br>
                <label for="descripcion">Describe la situación:</label>
                <textarea name="descripcion" id="descripcion" cols="70" rows="10" required></textarea>
                <br>
                <label for="prioridad">Prioridad:</label>
                <select name="prioridad" id="prioridad">
                    <option value="0">...</option>
                    <option value="baja">Baja</option>
                    <option value="media">Media</option>
                    <option value="alta">Alta</option>
                </select>
                <br>
                <hr>
                <h3>Consideras que la web contiene alguno de estos elementos?</h3>
                <label for="navegacion">Correcta navegación:</label>
                <input type="checkbox" name="navegacion" id="navegacion">
                <br>
                <label for="enlaces">Enlaces activos:</label>
                <input type="checkbox" name="enlaces" id="enlaces">
                <br>
                <label for="rendimiento">Rendimiento:</label>
                <input type="checkbox" name="rendimiento" id="rendimiento">
                <br>
                <label for="usabilidad">Uso correcto de la usabilidad:</label>
                <input type="checkbox" name="usabilidad" id="usabilidad">
                <br>
                <label for="compatibilidad">Compatibilidad:</label>
                <input type="checkbox" name="compatibilidad" id="compatibilidad">
                <br>
                <hr>
                <label for="rango">Indique su rango de opinión siendo 0 desfavorable y 5 muy favorable:</label>
                <input type="range" name="rango" id="rango" min="0" max="5" step="0.1">
                <br>
                <br>
                <input type="submit" name="enviar" value="Enviar">
                <input type="reset" value="Borrar">
                <br>
            </form>

            <div id="ver_comentarios"><a href="mostrar_comentarios.php">Ver comentarios</a></div>
            </div>
        
        

    
        <footer id="piedepag">
            <h1>andae</h1>
            <p>todos los derechos reservados</p>
        </footer>
    
    </div>
    </body>
    
</html>