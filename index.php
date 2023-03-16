<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require './configuration/DBConnection.php';
require './configuration/routeConfig.php';
require 'router.php';
require './views/layout.phtml';

?>
