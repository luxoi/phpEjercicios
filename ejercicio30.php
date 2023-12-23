<?php
session_start();

$_SESSION["usuario"]="Luxoi";
$_SESSION["estatus"]="logueado";

echo "Sesion iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]."<br/>"."estatus: ".$_SESSION["estatus"];

?>