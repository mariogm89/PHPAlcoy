<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi web</title>
</head>
<body>
    <?php
        $name = "Hello... it's me...";
        echo $name;
        echo '<br>';
        const APP_NAME = '4 8 15 16 23 42'; // define("APP_NAME", "4 8 15 16 23 42") SIEMPRE EN MAYUSCULAS LA CONSTANTE
        echo APP_NAME;
        echo '<br>';
        echo 'Fecha de hoy: ';
        echo date('d/m/Y');
        echo '<br>';
        var_dump($name);
        echo '<br>';
        echo 3 + 017;
        echo '<br>';
        $a = 4.5;
        $b = 1.5;
        echo 'Operación con coma flotante: ';
        echo ($a + $b);
        echo '<br>';
        echo "Esto se imprimirá en\n2lineas";
        echo '<br>';
        $my_name = "Raúl";
        echo "Hola $my_name"; // mostrará "Hola Raúl"
        $my_name = "Paco";
        echo '<br>';
        echo <<<EOD
        Hola $my_name
        este es un ejemplo de cadena
        expresada mediante la sintaxis heredoc.
EOD;
        echo '<br>';
        $num1 = 123;
        echo "$num1 multiplicado por 1000 es igual a {$num1}000";
        echo '<br>';
        $num2 = 2000;
        echo "$num1 multiplicado por $num2 es igual a ".$num1*$num2;
        echo '<br>';
        $mundo = 'Hola ';
        echo "{$mundo}mundo";
        echo '<br>';
        echo $mundo."mundo"; // Esta es la más correcta de las 3
        echo '<br>';
        echo "$mundo mundo";
        echo '<br>';
        $name = 'Jorge';
        if ($name){
            echo "Hola";
        } else {
            echo "Adiós";
        }
    ?>
</body>
</html>