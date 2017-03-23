<?php

require 'forum/user.php';
require 'web/user.php';

use Forum\User as ForumUser;
use Web\User as WebUser;

$pepa = new ForumUser('Pepa', 'Flores');
$pepe = new ForumUser('Pepe', 'Gotera');
$otilio = new ForumUser('Otilio', 'Pérez');

$admin = new WebUser('admin', 'admin@a.com');

var_dump($pepa);
echo '<br>';
var_dump($pepe);
echo '<br>';
var_dump($otilio);
echo '<br>';
var_dump($admin);
?>