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
        for ($i = $start; $i <= $end; $i++){
            echo $num ." x " .$i ." = ". ($num * $i). '<br>';
        }
    ?>
</body>
</html>