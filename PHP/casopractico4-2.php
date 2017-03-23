<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 7;
        $start = 1;
        $end = 20;
        $i = $start;
        while($i <= $end){
            echo $num ." x " .$i ." = ". ($num * $i). '<br>';
            $i++;
        }
    ?>
</body>
</html>