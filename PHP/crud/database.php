<?php
//Aceso a la base de datos
try {
    $pdo = new PDO('mysql:host=localhost;dbname=libros;charset=UTF8','root', '');
} catch (Exception $e) {
    die("No se pudo conectar: " . $e->getMessage());
}
$libros=$pdo->query('SELECT titulo, autor, id from libro order by autor');
//Funcion que muestra la tabla con el contenido
function table(){
    global $pdo;
    global $libros;

    while ($libro = $libros->fetch()){
        $id=$libro['id'];
        ?>
        <ul>
            <li><?=$libro['titulo']?> de <?=$libro['autor']?>.</li>
                <form action="show.php" method="GET" style="display:inline">
                    <input type="hidden" name="id" value= <?=$id?> >
                    <input type="submit" value="Más información">
                </form>
            
           
                <form action="edit.php" method="GET" style="display:inline">
                    <input type="hidden" name="id" value= <?=$id?> >
                    <input type="submit" value="Editar libro">
                </form>
           
           
                <form action="delete.php" method="GET" style="display:inline">
                    <input type="hidden" name="id" value= <?= $id?> >
                    <input type="submit" value="Eliminar libro">
                </form>
        </ul>

<?php
    }
}
function masinfo(){
    global $pdo;
    $id = $_GET['id'];
    echo $id."<br>";
    $libros= $pdo->query("SELECT titulo, autor, descripcion FROM libro WHERE id = $id" );
    $libro = $libros->fetch();
?>
    <div>
    <b>Titulo:</b> <?=$libro['titulo']?> <br> 
    <b>Autor:</b> <?=$libro['autor']?> <br> 
    <b>Argumento:</b> <?=$libro['descripcion']?> <br>
    </div>
    <?php
}

function update(){
    global $pdo;
    $id = $_GET['id'];
    $titulo = $_GET['titulo'];
    $autor = $_GET['autor'];
    $descripcion = $_GET['descripcion'];
    $libros= $pdo->query("SELECT titulo, autor, descripcion FROM libro WHERE id = $id" );
    $pdo->query("UPDATE libro SET titulo = '$titulo', autor = '$autor', descripcion = '$descripcion' WHERE id='$id'");
}
function delete(){
    global $pdo;
    $id = $_GET['id'];
    echo $id."<br>";
    $pdo->query("DELETE FROM libro WHERE id = $id" );

    echo "Se ha borrado el libro.";
}
?>