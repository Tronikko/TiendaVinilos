<?php
$server = "loggin.mysql.database.azure.com";
$userdb = "paco";
$passworddb = "199627Fggv27";
$namedb = "tiendavinilos";

$conexion = new mysqli($server, $userdb, $passworddb, $namedb);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
