<?php

require_once("../sistema/conexiones/conexion1.php");
if (isset($_POST["btnAgregar"])) {

    $consulta1 = "select max(UsuIdUsuario)+1 from comentario;";
    $conexion->query($consulta1);
        
    $Nombre= !empty ($_REQUEST['nombre']) ? $_REQUEST['nombre'] : '';
    $Apellido= !empty ($_REQUEST['apellido']) ? $_REQUEST['apellido'] : '';   
    $NumDocumento= !empty ($_REQUEST['ndocumento']) ? $_REQUEST['ndocumento'] : '';
    $Celular= !empty ($_REQUEST['celular']) ? $_REQUEST['celular'] : '';
    $Correo= !empty ($_REQUEST['correo']) ? $_REQUEST['correo'] : '';
    $Asunto= !empty ($_REQUEST['asunto']) ? $_REQUEST['asunto'] : '';
    $Mensaje= !empty ($_REQUEST['mensaje']) ? $_REQUEST['mensaje'] : '';

    $consulta = "INSERT INTO `comentarios` (`Nombre`, `Apellido`, `NumDocumento`, `Celular`, `Correo`, `Asunto`, `Mensaje`) VALUES ('$Nombre', '$Apellido', '$NumDocumento','$Celular', '$Correo', '$Asunto','$Mensaje');";
    $conexion->query($consulta);

    if ($consulta) {
        echo "<script>if(alert('Comentario Agregado Correctamente')){
            document.location='../index.html';}
            else{ document.location='../index.html';
               }</script>";
    } else {
        echo "<script>if(alert('Error al Generar')){
            document.location='../index.html';}
            else{ document.location='../index.html';
               }</script>";
    }
    mysql_close($Conex);
}