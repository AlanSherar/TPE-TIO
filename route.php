<?php 
require_once "tpe.tio.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action= "home";
if(!empty($_REQUEST['action']))
{
    $action= $_REQUEST['action'];
}

$params= explode("/", $action);
switch ($params[0]){
    case 'home':
        showCalculadora();
        break;
    case 'calculadora':
        showCalculadora();
        break;
    case 'about':
        showAbout();
        break;
    case 'contactos':
        showContactos();
        break;
    default:
      echo "error";
      break;
} 


