<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=libros;charset=UTF8','root', '');
} catch (Exception $e) {
    die("No se pudo conectar: " . $e->getMessage());
}

$libros= $pdo->query('SELECT titulo, autor, id FROM libro');

try{
	    	$add = "INSERT INTO libro (titulo, autor, descripcion) VALUES (:titulo, :autor, :descripcion)";
		    $stmt = $pdo->prepare($add);
		    $stmt->bindParam(':titulo', $_REQUEST['titulo']);
		    $stmt->bindParam(':autor', $_REQUEST['autor']);
		    $stmt->bindParam(':descripcion', $_REQUEST['descripcion']);
		    $stmt->execute();
		    header("Location: index.php");
		} catch(PDOException $error){
		    die("ERROR: No se puede ejecutar $add. " . $error->getMessage());
	}
?>
