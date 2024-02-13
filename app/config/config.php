<?php 

/*
*  prod.php  => produção
*  local.php => QA | localhost
*/

//$file = 'local.php';

if(preg_match('/.*(localhost|qa).+/', $_SERVER['REQUEST_URI']))
{

}