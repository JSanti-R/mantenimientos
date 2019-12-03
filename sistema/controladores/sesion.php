<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
} else {
    echo "<script>if(alert('Acceso denegado')){
            document.location='../sistema/login.html';}
            else{ document.location='../sistema/login.html';
               }</script>";
    exit;
}
$now = time(); // checking the time now when home page starts
if ($now > $_SESSION['expire']) {
    session_destroy();
    echo "<script>if(alert('Su sesion ha expirado')){
            document.location='../sistema/login.php';}
            else{ document.location='../sistema/login.html';
               }</script>";
    exit;
}
?>

