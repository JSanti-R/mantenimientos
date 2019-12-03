<?php

//$conexion=new mysqli($servidor, $usuario, $pass, $bd);
$conexion=mysqli_connect("localhost:3306", "root", "", "id11345015_servicios");
if(mysqli_connect_errno()){
    echo "Error al conectarse{$conexion->connect_errno}";
}
mysqli_set_charset($conexion,"utf8");

