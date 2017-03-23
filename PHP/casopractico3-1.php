<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $people = [
        [
            'name' => 'Juan',
            'age' => 25
        ],
        [
            'name' => 'Paco',
            'age' => 16
        ]
    ];
    if ($people[0]["age"] > $people[1]["age"]){
        echo $people[0]['name'] .' es mayor que '. $people[1]['name'].' y la diferencia de edad es ' .($people[0]["age"]-$people[1]["age"]);
    } elseif ($people[0]["age"] < $people[1]["age"]){
        echo $people[0]['name'] .' es menor que '. $people[1]['name'] .' y la diferencia de edad es ' .($people[1]["age"]-$people[0]["age"]);
    } else {
        echo $people[0]['name'] .' y '. $people[1]['name'] .' tienen la misma edad.';
    }
?>
</body>
</html>