<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
</head>

<body>
    <?php require 'View/header.php' ?>
    <div id="main">
        <h1 class="center">Detalle de: <?php echo $this->alumno->nombre . ' ' . $this->alumno->apellido ?></h1>
        <div class="center"><?php echo $this->mensaje; ?></div>
        <form action="<?php echo constant('URL'); ?>Query/ActualizarAlumno" method="post">
            <p>
                <label for="">Matrícula</label><br>
                <input type="text" name="matricula" value="<?php echo $this->alumno->matricula ?>" required disabled>
            </p>
            <p>
                <label for="">Nombre</label><br>
                <input type="text" name="nombre" value="<?php echo $this->alumno->nombre ?>" required>
            </p>
            <p>
                <label for="">Apellido</label><br>
                <input type="text" name="apellido" value="<?php echo $this->alumno->apellido ?>" required>
            </p>
            <p>
                <input type="submit" value="Actualizar">
            </p>
        </form>
    </div>
    <?php require 'View/footer.php' ?>
</body>

</html>