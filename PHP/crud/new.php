<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Libro nuevo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='//fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
</head>
<body>
<h2>Libro nuevo</h2>
<form action="insert.php" method="POST">

	<label for="titulo">Título:</label>
	<input type="text" name="titulo" required value="<?= $_POST['titulo'] ?? ''; ?>">
    <br>
	<label for="autor">Autor:</label>
	<input type="text" name="autor" required value="<?= $_POST['autor'] ?? ''; ?>">
    <br>
	<label for="descripcion">Argumento:</label><br>
	<textarea rows="5" cols="50" name="descripcion" ></textarea>
    <br>
	<input type="submit" value="Añadir libro a la lista">
</form>
<form action=index.php method='GET'>
    <input type='submit' value='Volver al listado de libros'>
</form>
</body>
</html>