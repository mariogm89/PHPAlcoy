<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=flats;charset=UTF8','root', '');
} catch (Exception $e) {
    die("No es posible conectarse a la base de datos: " . $e->getMessage());
}
$flats=$pdo->query('SELECT id, address, price FROM flat');

try {
    $add="INSERT INTO flat (address, price, description) VALUES (:address, :price, :description)";
    $stmt=$pdo->prepare($add);
    $stmt->bindParam(':address', $_REQUEST['address']);
    $stmt->bindParam(':price', $_REQUEST['price']);
    $stmt->bindParam(':description', $_REQUEST['description']);
    $stmt->execute();
    header("Location: index.php");
} catch(PDOException $error){
    die ("ERROR en $add" . $error->getMessage());
}
?>