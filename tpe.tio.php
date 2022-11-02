<?php
//preparacion para ruteo proximo(?)
//super basico pero sirve, el que quiera que arregle la imagen de about.php ;)
function showCalculadora(){
   include 'templates/header.php';
   include 'templates/calculadora.php';
   include 'templates/footer.php'; 
}
function showAbout(){
   include 'templates/header.php';
   include 'templates/about.php';
   include 'templates/footer.php'; 
}
function showContactos(){
   include 'templates/header.php';
   include 'templates/contactos.php';
   include 'templates/footer.php'; 
}