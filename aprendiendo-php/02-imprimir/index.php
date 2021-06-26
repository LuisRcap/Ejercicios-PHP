<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    
    <body>
        <h1>Master en PHP</h1>
        
        <?="Bienvenido al curso más grande de PHP"?>
        
        <?php
            // Titular de la sección
            echo '<h3>Listado de videojuegos</h3>';
            
            /* Esta es una lista
             * de videojuegos
             * moderno
             */
            echo '<ul>'
                    .'<li>GTA</li>'
                    .'<li>FIFA</li>'
                    .'<li>Mario Bros</li>'
                    .'</ul>';
            
            //echo '<br/>HOLA HOLA HOLA<br/>';
            
            // Párrado explicativo
            echo '<p>Esta es toda'.' - '.'lista de videojuegos</p>';
                    
        ?>
    </body>
</html>
