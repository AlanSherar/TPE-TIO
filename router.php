<?php 
require_once "tpe.tio.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action= "calculadora";
if(!empty($_REQUEST['action']))
{
    $action= $_REQUEST['action'];
}
$params= explode("/", $action);
switch ($params[0]){
    case 'calculadora':
        showBase($params[0]);
        break;
    case 'about':
        showBase($params[0]);
        break;
    case 'contactos':
        showBase($params[0]);
        break;
    case 'matematica':
        showBase($params[0]);
        break;
    default:
      echo "error";
      break;
} 


