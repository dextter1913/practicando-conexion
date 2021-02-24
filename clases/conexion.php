<?php 
$host = "localhost";
$BaseDatos = "practica";
$usuario = "root";
$contraseña = "";

$tabla = "cliente";

error_reporting(0);

$conexion = new mysqli($host,$usuario,$contraseña,$BaseDatos);

if ($conexion->connect_errno) {
    echo "Nuestro sitio experimenta fallos...";
    exit();
}
?>