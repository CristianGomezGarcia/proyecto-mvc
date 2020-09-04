<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>

<body>
    <?php require 'View/header.php' ?>
    <div id="main">
        <h1 class="center">Nuevo</h1>
        <div class="center"><?php echo $this->mensaje; ?></div>
        <form action="<?php echo constant('URL'); ?>New/RegistrarAlumno" method="post">
            <p>
                <label for="">Matrícula</label><br>
                <input type="text" name="matricula" id="" required>
            </p>
            <p>
                <label for="">Nombre</label><br>
                <input type="text" name="nombre" id="" required>
            </p>
            <p>
                <label for="">Apellido</label><br>
                <input type="text" name="apellido" id="" required>
            </p>
            <p>
                <input type="submit" value="Registrar">
            </p>
        </form>
    </div>
    <?php require 'View/footer.php' ?>
</body>

</html>