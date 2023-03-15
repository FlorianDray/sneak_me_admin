<?php

require "./models/Marques.php";

$maMarque = new Marques(1, "Nike");
?>
<h1><?php echo $maMarque->getId(); ?></h1>

