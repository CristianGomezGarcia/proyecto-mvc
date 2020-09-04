<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>

<body>
    <?php require 'View/header.php' ?>
    <div id="main">
        <h1 class="center error"><?php echo $this->errorMessage; ?></h1>
    </div>
    <?php require 'View/footer.php' ?>
</body>

</html>