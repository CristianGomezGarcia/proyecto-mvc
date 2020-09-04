<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>

<body>
    <?php require 'View/header.php' ?>
    <div id="main">
        <h1 class="center">Consulta</h1>
        <div id="respuesta" class="center"></div>
        <table width="100%">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody id="tbody-alumnos">
                <?php

                foreach ($this->alumnos as $row) {
                    $alumno = new Alumno();
                    $alumno = $row;
                ?>
                    <tr id="fila-<?php echo $alumno->matricula ?>">
                        <td><?php echo $alumno->matricula ?></td>
                        <td><?php echo $alumno->nombre ?></td>
                        <td><?php echo $alumno->apellido ?></td>
                        <td><a href="<?php echo constant('URL') . 'Query/VerAlumno/' . $alumno->matricula ?>">Editar</a></td>
                        <td> <button class="btnEliminar" data-matricula="<?php echo $alumno->matricula ?>">Eliminar</button> </td>
                        <!--<td><a href="<?php echo constant('URL') . 'Query/EliminarAlumno/' . $alumno->matricula ?>">Eliminar</a></td>-->
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
    <?php require 'View/footer.php' ?>
    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
</body>

</html>