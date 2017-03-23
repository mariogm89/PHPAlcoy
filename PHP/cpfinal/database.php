<?php
//Aceso a la base de datos
try {
    $pdo = new PDO('mysql:host=localhost;dbname=flats;charset=UTF8','root', '');
} catch (Exception $e) {
    die("No es posible conectarse a la base de datos: " . $e->getMessage());
}
$flats=$pdo->query('SELECT id, address, price FROM flat');
//Funcion que muestra la tabla con su contenido
function listFlats(){
    global $pdo;
    global $flats;

    while ($flat = $flats->fetch()){
        $id=$flat['id'];
        ?>
        <ul>
            <li>Piso en la <?=$flat['address']?>.</li>
                <form action="show.php" method="GET" style="display:inline">
                    <input type="hidden" name="id" value=<?=$id?>>
                    <input type="submit" value="Más información">
                </form>
                <form action="edit.php" method="GET" style="display:inline">
                    <input type="hidden" name="id" value=<?=$id?>>
                    <input type="submit" value="Editar piso">
                </form>
                <form action="delete.php" method="GET" style="display:inline">
                    <input type="hidden" name="id" value=<?= $id?>>
                    <input type="submit" value="Eliminar piso">
                </form>
        </ul>
<?php
    }
}
//Función para mostrar más información acerca del piso seleccionado
function infoFlats(){
    global $pdo;
    $id = $_GET['id'];
    echo $id."<br>";
    $flats= $pdo->query("SELECT address, price, description FROM flat WHERE id = $id" );
    $flat = $flats->fetch();
?>
    <div>
    <b>Dirección:</b> <?=$flat['address']?> <br>
    <b>Precio:</b> <?=$flat['price']?> € <br>
    <b>Descripción:</b> <?=$flat['description']?> <br><br>
    </div>
    <?php
}
//Función que actualiza el piso seleccionado
function updateFlats(){
    global $pdo;
    $id = $_GET['id'];
    $address = $_GET['address'];
    $price = $_GET['price'];
    $description = $_GET['description'];
    $flats= $pdo->query("SELECT address, price, description FROM flat WHERE id = $id" );
    $pdo->query("UPDATE flat SET address = '$address', price = '$price', description = '$description' WHERE id='$id'");
}
//Función que borra un piso seleccionado
function deleteFlats(){
    global $pdo;
    $id = $_GET['id'];
    echo $id."<br>";
    $pdo->query("DELETE FROM flat WHERE id = $id" );
}
?>