<link rel="stylesheet" type="text/css" href="style.css">
<link href='//fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
<?php
require 'database.php';
global $pdo;
$id = $_GET['id'];
$libros= $pdo->query("SELECT titulo, autor, descripcion FROM libro WHERE id = $id" );
$libro = $libros->fetch();
$titulo = $libro['titulo'];
$autor = $libro['autor'];
$descripcion = $libro['descripcion'];
?>

<!-- empieza el formulario y acaba el php -->
<form action="update.php" method="GET">
	<input type="hidden" name="id" value=<?=$id;?> >

	Título: <input type="text" name="titulo" value= "<?= "$titulo" ?>" ><br>

	Autor: <input type="text" name="autor" value="<?=$autor?>"><br>

	Argumento: <input type="text" name="descripcion" value= "<?=$descripcion?>" ><br>

	<input type="Submit" value="Actualizar libro">
</form>
<form action=index.php method='GET'>
    <input type='submit' value='Volver al listado de libros'>
</form>




