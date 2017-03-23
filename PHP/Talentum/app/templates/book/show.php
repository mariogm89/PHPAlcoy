<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php $pageTitle = $book->getTitle() ?></title>
</head>
<body>
    <h1><?= $book->getTitle() ?></h1>
    <h2><?= $book->getAuthor() ?></h2>
    <p><?= $book->getDescription() ?></p>
    <form action=/Talentum/book method='GET'>
        <input type='submit' value='Volver al listado de libros'>
    </form>
</body>
</html>