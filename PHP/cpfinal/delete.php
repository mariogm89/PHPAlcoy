<?php
require 'database.php';
deleteFlats();
//Uso header para que no se quede en una página en blanco y vuelva al archivo index.php
header("Location: index.php");
?>