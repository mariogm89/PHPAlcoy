<?php

use APP\cat\Cat;
use APP\user\Cat as UserCat;

require 'cat.php';
require 'dog.php';
require 'user.php';

$cat1 = new Cat('Persa', 'Amarillo', 3);
$cat2 = new Cat('Ragdoll', 'Blanco', 5);
$cat3 = new Cat('Sphynx', 'Gris', 2);
$dog1 = new Dog('Labrador', 'Blanco', 5);
$dog2 = new Dog('Rottweiler', 'Negro', 8);
$dog3 = new Dog('Pastor Alemán', 'Marrón', 2);
$user1 = new UserCat('Fran', 'Tástico');
$user2 = new UserCat('Aitor', 'Tilla');
$user3 = new UserCat('Johnny', 'Melavo');

echo "Gato 1: <br> $cat1 <br> $user1 <br>";
echo '<br>';
echo "Gato 2: <br> $cat2 <br> $user2 <br>";
echo '<br>';
echo "Gato 3: <br> $cat3 <br> $user3 <br>";
echo '<br>';
echo "Perro 1: <br> $dog1 <br>";
echo '<br>';
echo "Perro 2: <br> $dog2 <br>";
echo '<br>';
echo "Perro 3: <br> $dog3 <br>";
echo '<br>';
?>