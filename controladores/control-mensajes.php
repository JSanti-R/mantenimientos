<?php

require_once("../sistema/conexiones/conexion1.php");
if (isset($_POST["btnAgregar"])) {

    $consulta1 = "select max(UsuIdUsuario)+1 from usuarios;";
    $conexion->query($consulta1);
        
    $Nombres= !empty ($_REQUEST['nombres']) ? $_REQUEST['nombres'] : '';
    $Apellidos= !empty ($_REQUEST['apellidos']) ? $_REQUEST['apellidos'] : '';
    $TipoDocumento= !empty ($_REQUEST['tdocumento']) ? $_REQUEST['tdocumento'] : '';
    $NumDocumento= !empty ($_REQUEST['ndocumento']) ? $_REQUEST['ndocumento'] : '';
    $Correo= !empty ($_REQUEST['correo']) ? $_REQUEST['correo'] : '';
    $TipUsuario= !empty ($_REQUEST['tusuario']) ? $_REQUEST['tusuario'] : '';
    $TipSolicitud= !empty ($_REQUEST['tsolicitud']) ? $_REQUEST['tsolicitud'] : '';
    $EstadoSoli= !empty ($_REQUEST['testado']) ? $_REQUEST['testado'] : '';
    $Modulo= !empty ($_REQUEST['modulo']) ? $_REQUEST['modulo'] : '';

    $consulta = "INSERT INTO `equiporegistro` (`UsuNombres`, `UsuApellidos`, `UsuTipoDocumento`, `UsuNumDocumento`, `UsuCorreo`, `UsuTipUsuario`, `UsutipoSolicitud`, `UsuFechIni`, `UsuFechFin`, `UsuEstadoSolic`, `UsuCodModulo`) VALUES ('$Nombres', '$Apellidos', '$TipoDocumento', '$NumDocumento', '$Correo', '$TipUsuario', '$TipSolicitud', NOW(), NULL, '$EstadoSoli', '$Modulo');";
    $conexion->query($consulta);

    if ($consulta) {
        echo "<script>if(alert('Equipo Agregado Correctamente')){
            document.location='../inicio.php';}
            else{ document.location='../inicio.php';
               }</script>";
    } else {
        echo "<script>if(alert('Error al Generar')){
            document.location='../inicio.php';}
            else{ document.location='../inicio.php';
               }</script>";
    }
    mysql_close($Conex);
}

if (isset($_POST["btnModificar"])) {
   $Nombres= !empty ($_REQUEST['nombres']) ? $_REQUEST['nombres'] : '';
    $Apellidos= !empty ($_REQUEST['apellidos']) ? $_REQUEST['apellidos'] : '';
    $TipoDocumento= !empty ($_REQUEST['tdocumento']) ? $_REQUEST['tdocumento'] : '';
    $NumDocumento= !empty ($_REQUEST['ndocumento']) ? $_REQUEST['ndocumento'] : '';
    $Correo= !empty ($_REQUEST['correo']) ? $_REQUEST['correo'] : '';
    $TipUsuario= !empty ($_REQUEST['tusuario']) ? $_REQUEST['tusuario'] : '';
    $TipSolicitud= !empty ($_REQUEST['tsolicitud']) ? $_REQUEST['tsolicitud'] : '';
    $EstadoSoli= !empty ($_REQUEST['testado']) ? $_REQUEST['testado'] : '';
    $Modulo= !empty ($_REQUEST['modulo']) ? $_REQUEST['modulo'] : '';
    $consulta = "UPDATE `equiporegistro` SET `UsuNombres`='$Nombres', `UsuApellidos`='$Apellidos', `UsuTipoDocumento`='$TipoDocumento', `UsuNumDocumento`='$NumDocumento', `UsuCorreo`='$Correo', `UsuTipUsuario`='$TipUsuario', `UsutipoSolicitud`='$TipSolicitud', `UsuEstadoSolic`='$EstadoSoli', `UsuCodModulo`='$Modulo' WHERE (`UsuIdUsuario`='" . $_POST['id'] . "');";
    //echo $Sql; die();
    $conexion->query($consulta);
    if ($consulta) {
        echo "<script>if(alert('Registro Modificado Correctamente')){
            document.location='../equipos.php';}
            else{ document.location='../equipos.php';
               }</script>";
        //echo "Registro Modificado Correctamente";
        //echo "<br>";
        // echo '<a href="../inicio.php"> Aceptar </a>';
    } else {
        echo "<script>if(alert('Error al modificar el Registro')){
            document.location='../equipos.php';}
            else{ document.location='../equipos.php';
               }</script>";
    }
    mysql_close($Conex);
}

if (isset($_POST["btnActivar"])) {
   $Nombres= !empty ($_REQUEST['nombres']) ? $_REQUEST['nombres'] : '';
    $Apellidos= !empty ($_REQUEST['apellidos']) ? $_REQUEST['apellidos'] : '';
    $TipoDocumento= !empty ($_REQUEST['tdocumento']) ? $_REQUEST['tdocumento'] : '';
    $NumDocumento= !empty ($_REQUEST['ndocumento']) ? $_REQUEST['ndocumento'] : '';
    $Correo= !empty ($_REQUEST['correo']) ? $_REQUEST['correo'] : '';
    $TipUsuario= !empty ($_REQUEST['tusuario']) ? $_REQUEST['tusuario'] : '';
    $TipSolicitud= !empty ($_REQUEST['tsolicitud']) ? $_REQUEST['tsolicitud'] : '';
    $EstadoSoli= !empty ($_REQUEST['testado']) ? $_REQUEST['testado'] : '';
    $Modulo= !empty ($_REQUEST['modulo']) ? $_REQUEST['modulo'] : '';
    $consulta = "INSERT INTO `equiporegistro` (`UsuNombres`, `UsuApellidos`, `UsuTipoDocumento`, `UsuNumDocumento`, `UsuCorreo`, `UsuTipUsuario`, `UsutipoSolicitud`, `UsuFechIni`, `UsuFechFin`, `UsuEstadoSolic`, `UsuCodModulo`) VALUES ('$Nombres', '$Apellidos', '$TipoDocumento', '$NumDocumento', '$Correo', '$TipUsuario', '$TipSolicitud', NOW(), NULL, '$EstadoSoli', '$Modulo');";
    $conexion->query($consulta);
    if ($consulta) {
        echo "<script>if(alert('Usuario Activado Correctamente')){
            document.location='../equipos.php';}
            else{ document.location='../equipos.php';
               }</script>";
        //echo "Registro Modificado Correctamente";
        //echo "<br>";
        // echo '<a href="../inicio.php"> Aceptar </a>';
    } else {
        echo "<script>if(alert('Error Al Activar Usuario')){
            document.location='../equipos.php';}
            else{ document.location='../equipos.php';
               }</script>";
    }
    mysql_close($Conex);
}

if (isset($_GET["btnEliminar"])) {

    $consulta = "DELETE FROM `comentarios` WHERE (`UsuIdUsuario`='" . $_GET['id'] . "');";
    $conexion->query($consulta);
    if ($consulta) {
        echo "<script>if(alert('Mensaje Eliminado Correctamente')){
            document.location='./sistema/equipos.php';}
            else{ document.location='../sistema/equipos.php';
               }</script>";
    } else {
        echo "<script>if(alert('Error al Eliminar')){
            document.location='./sistema/equipos.php';}
            else{ document.location='./sistema/equipos.php';
               }</script>";
    }
    mysql_close($Conex);
}

if (isset($_GET["btnFinalizarT"])) {

    $consulta = "Update `comentarios` set UsuEstadoSolic=3,UsuFechFin=NOW() WHERE (`UsuIdUsuario`='" . $_GET['id'] . "');";
    $conexion->query($consulta);
    if ($consulta) {
        echo "<script>if(alert('Turno Finalizado Correctamente')){
            document.location='../sistema/equipos.php';}
            else{ document.location='../sistema/equipos.php';
               }</script>";
    } else {
        echo "<script>if(alert('Error al Finalizar')){
            document.location='../inicio.php';}
            else{ document.location='../inicio.php';
               }</script>";
    }
    mysql_close($Conex);
}