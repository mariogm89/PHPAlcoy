<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevo piso</title>
</head>
<body>
    <form action="insert.php" method="POST">
        Dirección: <input type="text" name="address" required value="<?= $_POST['address'] ?? ''; ?>"><br>
        Precio: <input type="text" name="price" required value="<?= $_POST['price'] ?? ''; ?>"><br>
        Descripción: <input type="text" name="description" required value="<?= $_POST['description'] ?? ''; ?>"><br><br>
        <input type="submit" value="Añadir piso a la lista"><br><br>
    </form>
    <form action="index.php" method="GET">
        <input type="submit" value="Volver a la lista de pisos"><br>
    </form>
    <?php
    require 'footer.php';
    ?>
</body>
</html>