<?php

include "../../../clases/Usuarios.php";

$Usuarios = new Usuarios();

$idUsuario = $_POST['idUsuario'];

$datos = $Usuarios->obtenerDatosUsuario($idUsuario);

echo json_encode($datos);
?>