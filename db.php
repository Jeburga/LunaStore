<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "luna_store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sqlEmpleados = "SELECT nombre, puesto, email FROM empleados";
$resultEmpleados = $conn -> query($sqlEmpleados);

$sqlProductos = "SELECT nombre, precio, descripcion FROM productos";
$resultProductos = $conn -> query($sqlProductos);

$sqlSucursales = "SELECT nombre, direccion, telefono FROM sucursales";
$resultSucursales = $conn -> query($sqlSucursales);
?>