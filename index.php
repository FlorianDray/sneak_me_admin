<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require './configuration/DBConnection.php';
require './configuration/rooteConfig.php';
require 'rooter.php';
require './views/layout.phtml';

?>
