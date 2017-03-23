<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $open = [
        'lunes' => [[10.00, 14.00], [16.00, 20.00]],
        'martes' => [[10.00, 14.00], [16.00, 20.00]],
        'miercoles' => [[10.00, 14.00], [16.00, 20.00]],
        'jueves' => [[10.00, 14.00], [16.00, 20.00]],
        'viernes' => [[10.00, 14.00], [16.00, 20.00]],
        'sabado' => [[10.00, 20.00]],
        'domingo' => []
    ];
    $day = 'sabado';
    $time = 14.00;
    $opened = false;
    foreach($open[$day] as $clock){
        if($time >= $clock[0] AND $time < $clock[1]){
            $opened = true;
        }
    }
    if($open[$day] == []){
        echo "El $day no abre la tienda.";
    }elseif($opened){
        echo "¡El $day a las $time horas la tienda está abierta!";
    }else{
        echo "¡El $day a las $time horas la tienda está cerrada!";
    }
    ?>
</body>
</html>