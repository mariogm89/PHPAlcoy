<?php
require 'database.php';
global $pdo;
$id = $_GET['id'];
$flats= $pdo->query("SELECT address, price, description FROM flat WHERE id = $id" );
$flat = $flats->fetch();
$address = $flat['address'];
$price = $flat['price'];
$description = $flat['description'];
?>
<form action="update.php" method="GET">
    <input type="hidden" name="id" value="<?=$id;?>" >
    Dirección: <input type="text" name="address" value= "<?=$address?>" ><br>
    Precio: <input type="text" name="price" value="<?=$price?>"><br>
    Descripción: <input type="text" name="description" value= "<?=$description?>" ><br>
    <input type="Submit" value="Actualizar libro">
</form>
<form action=index.php method='GET'>
    <input type='submit' value='Volver al listado de libros'>
</form>