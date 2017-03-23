<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $bot = ['botella', 'botellas'];
        $i = 99;
        $p = $bot[0];
        while ($i > 0){
            if($i != 1){
                $p = $bot[1];
            }else{
                $p = $bot[0];
            };
            echo    "$i $p de cerveza en la pared,<br>
                    $i $p de cerveza.<br>
                    Coge una y pásala,<br>"
                    .--$i ;
                    if($i != 1){
                        $p = $bot[1];
                    }else{
                        $p = $bot[0];
                    };
                    echo " $p de cerveza en la pared.<br><br>";
        };
        echo    "No quedan botellas de cerveza en la pared.<br>
                No quedan botellas de cerveza.<br>
                Ir a la tienda y comprar alguna más...<br>
                99 botellas de cerveza.<br>";
    ?>
</body>
</html>