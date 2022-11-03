<?php
//preparacion para ruteo proximo(?)
//super basico pero sirve, el que quiera que arregle la imagen de about.php ;)
function showBase($link){
   include 'templates/header.php';
   switch($link){
      case 'calculadora':
         include_once 'templates/calculadora.php';
         // include_once 'templates/calculadora.html';
         break;
      case 'about':
         include_once 'templates/about.php';
         // include_once 'templates/about.html';
         break;
      case 'contactos':
         include_once 'templates/contactos.php';
         // include_once 'templates/contactos.html';
         break;
      case 'matematica':
         include_once 'templates/matematica.php';
         // include_once 'templates/matematica.html';
         break;
      default:
         "error(?";
      break;
   }
   include 'templates/footer.php'; 
}