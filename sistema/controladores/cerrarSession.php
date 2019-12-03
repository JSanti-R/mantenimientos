<?php
session_start();
if (isset($_SESSION['loggedin'])) {
   session_destroy();
   header("Content-Type: text/html;charset=utf-8");
   echo "<script>if(alert('Se ha cerrado su sesión')){
            document.location='../login.php';}
            else{ document.location='../login.php';
               }</script>";   
}

