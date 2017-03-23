<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $open = [
            'from' => 10.00,
            'to' => 20.00
        ];
        $t = 10.00;
        if ($t >= $open['from'] AND $t < $open['to']){
            echo '¡La tienda está abierta!';
        }else{
            echo '¡Lo siento, está cerrado!';
        }
    ?>
</body>
</html>