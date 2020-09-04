<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
</head>

<body>
    <div id="header">
        <ul>
            <!--Los href tiene que er los nombres de los archivos 
            que están en la carpeta Controller pero sin la extensión .php ni la palabra Controller
            únicamente el nombre del archiv así como están aquí-->
            <li><a href="<?php echo constant('URL'); ?>Main">Inicio</a></li>
            <li><a href="<?php echo constant('URL'); ?>New">Nuevo</a></li>
            <li><a href="<?php echo constant('URL'); ?>Query">Consultas</a></li>
            <li><a href="<?php echo constant('URL'); ?>Help">Ayuda</a></li>
            <li><a href="<?php echo constant('URL'); ?>About">Acerca de</a></li>
        </ul>
    </div>
</body>

</html>