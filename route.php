<?php 

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action= "home";
if(!empty($_REQUEST['action']))
{
    $action= $_REQUEST['action'];
}

$params= explode("/", $action);
switch ($params[0]){
    case '':
        ;
        break;

    default:
      echo "error";
      break;
} 