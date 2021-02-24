<?php 
$host = "localhost";
$BaseDatos = "practica";
$usuario = "root";
$contraseña = "";
$tabla = "ciente";

error_reporting(0);

$conexion = new mysqli($host,$BaseDatos,$usuario,$contraseña);

if ($conexion->connect_errno) {
    echo "Nuestro sitio experimenta fallos...";
    exit();
}
?>