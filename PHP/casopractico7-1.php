<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $caducidad = time() + 10;
        setcookie("count", 0, $caducidad);
        echo "Contador de visitas: " .($_COOKIE['count'] ?? 0);
        setcookie("count", ($_COOKIE['count'] ?? 0) + 1, $caducidad);
    ?>
</body>
</html>
