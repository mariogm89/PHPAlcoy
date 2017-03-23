<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='//fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
</head>
<body>
<h2>Lista de libros</h2>

<?php
require 'database.php';
table();
?>
<form action=new.php method='GET'>
    <input type='submit' value='Añadir un libro nuevo'>
</form>

</body>
</html>