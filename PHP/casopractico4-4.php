<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $biblioteca = [
            "cine" => [
                "El guión",
                "Hitchcock",
            ],
            "programacion" => [
                "Patterns",
                "Clean Code",
                "Refactoring"
            ],
        ];
        echo "<ul>";
        foreach ($biblioteca as $biblio => $tipo){
            echo "<li>$biblio</li>";
            echo "<ul>";
            foreach ($tipo as $contenido){
                echo"<li>$contenido</li>";
            }
            echo "</ul>";
        }
        echo "</ul>"
    ?>
</body>
</html>