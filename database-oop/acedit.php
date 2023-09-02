<?php

    require 'database.php';

// $conf = mysqli_connect('localhost', 'root', '', 'eskul');

$db = new database('localhost', 'root', '', 'eskul');

$db->editfilm();

?>