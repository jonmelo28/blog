<?php 

require_once('../vendor/autoload.php'); 

use app\config;

$prod = false;

$file = $prod ? 'prod.php' : 'local.php'; 

require_once('env/'. $file);