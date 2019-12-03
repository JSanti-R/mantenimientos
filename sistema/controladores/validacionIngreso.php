<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Check Login</title>
        <meta charset = "utf8" />
    </head>
    <body>
        <?php
        $host_db = "localhost:3306";
        $user_db = "root";
        $pass_db = "";
        $db_name = "servicios";
        $tbl_name = "usuarios";
        $username = $_POST['usuario'];
        $password = $_POST['password'];
        $usuario = $_POST['usuario'];
// Connect to server and select databse.
      $mysqli = new mysqli("localhost:3306", "root", "", "servicios");
      $result = $mysqli->query("SELECT * FROM $tbl_name WHERE UsisCodusuario = '$username' and  	UsisPassword='$password'");
      $row = $result->fetch_assoc();
        //mysqli_select_db("$db_name")or die("Cannot Select Data Base");
// sent from form
/* @var $username type */
        // counting table row
        $count = mysqli_num_rows($result);
// If result matched $username and $password
        if ($count == 1) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;           
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (55 * 60);
            header("Location: ../inicio.php");
        } else {
            echo "<script>if(alert('Usuario o Password incorrectos')){
            document.location='../login.html';}
            else{ document.location='../login.html';
               }</script>";            
        }
        ?>



    </body>

</html>



