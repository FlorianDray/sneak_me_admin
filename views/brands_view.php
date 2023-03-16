<?php

require "../models/Brand.php";

$brand = new Brand(1, "Nike");
?>
<h1><?php echo $brand->getId(); ?></h1>

