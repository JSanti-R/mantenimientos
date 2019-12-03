<?php

$nombreUsuario= $_SESSION['username'];

$detallesU = $conexion->prepare("SELECT * FROM usuarios WHERE UsisNombres=:nombreusuario");

$detallesU -> bindParam(':nombreusuario',$nombreUsuario, PDO::PARAM_STR);
$detallesU->execute();

?>