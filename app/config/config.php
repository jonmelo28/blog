<?php 

/*
*  prod.php  => produção
*  local.php => QA | localhost
*/

//$file = 'local.php';

$prod = false;

$file = $prod ? 'prod.php' : 'local.php';

require_once('env/'. $file);