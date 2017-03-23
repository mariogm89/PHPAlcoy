<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de libros</title>
</head>
<body>
    <h1>Listado de libros</h1>
    <ul>
        <?php foreach ($books as $libro): ?>
            <li><a href="book/show/<?= $libro->getId() ?>"><?= $libro->getTitle() ?></a></li>
        <?php endforeach ?>
    </ul>
</body>
</html>