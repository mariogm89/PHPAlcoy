<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de pisos</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h3>Lista de pisos disponibles:</h3>
    <?php
    require 'database.php';
    listFlats();
    ?>
    <form action="new.php" method="GET" >
        <input type="submit" value="Añadir nuevo piso">
    </form>
    <?php
    require 'footer.php';
    ?>
</body>
</html>