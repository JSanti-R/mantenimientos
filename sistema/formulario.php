<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
} else {
    echo "<script>if(alert('Acceso denegado')){
            document.location='../login.php';}
            else{ document.location='../sistema/login.php';
               }</script>";
    exit;
}
$now = time(); // checking the time now when home page starts
if ($now > $_SESSION['expire']) {
    session_destroy();
    echo "<script>if(alert('Su sesion ha expirado')){
            document.location='../sistema/login.php';}
            else{ document.location='../sistema/login.php';
               }</script>";
    exit;
}
?>
<?php
include ("conexiones/conexion.php");
   $Nombres="";
    $Apellidos= "";
    $TipoDocumento="";
    $NumDocumento="";
    $Correo="";
    $TipUsuario="";
    $TipSolicitud="";
    $EstadoSoli="";
    $Modulo="";
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li class="active">
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <!--<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Credit Card</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Pay Invoice</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                                                <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Name on card</label>
                                                <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Card number</label>
                                                <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                                        <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Security code</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Pay $100.00</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>-->






                                

        <div class="col-lg-6">
          <div class="card">
            <section class="card-header">
              <header class="panel-heading">
                
              </header>
              <div class="panel-body">
                 <?php
                if (isset($_GET['id'])) {
                    ?>
                    <h2><font color="">Modificar Turno</h2> 
                    <br>
                    <br>
                    <?php
                    $consulta = "SELECT * FROM equiporegistro where UsuIdUsuario=" . $_GET['id'] . ";";
                     $Resultado = $conexion->query($consulta);                      
                        while ($usuariosregistro = $Resultado->fetch_assoc()){

                        
                      }
                      } else {

                    ?>
                    
                    <?php
                }
                ?>    
                <br>
                <br>  
                
               <h2><font color="">Agregar Equipo</h2>
                    
                    <br>
                <form class=""   action="controladores/DatosTurnos.php" method="Post" >

                   <!-- <div class="form-group">
                        <label> Tipo de equipo: </label>
                        <input type="text" class="form-control" id="nombres" value="<?=$Nombres?>" name="nombres" placeholder="Tipo equipo" required="">
                    </div> 

                    <div class="form-group">
                        <label> Apellidos: </label>
                        <input type="text" class="form-control" id="apellidos" value="<?= $Apellidos ?>" name="apellidos" placeholder="Apellidos" required="">
                    </div>  -->

                    <!--<div class="form-group">
                        <label> Tipo Documento: </label>
                        <select class="form-control"name="tdocumento" id="tdocumento"  required="true" >
                        <option value="0" <?PHP IF ($TipoDocumento == 0) { ?> selected="" <?php } ?> disabled selected="">seleccione</option>
                        <option value="1" <?PHP IF ($TipoDocumento == 1) { ?> selected="" <?php } ?>>Cédula Ciudadanía</option>
                        <option value="2" <?PHP IF ($TipoDocumento == 2) { ?> selected="" <?php } ?>>Cédula Extranjería</option>
                        <option value="3" <?PHP IF ($TipoDocumento == 3) { ?> selected="" <?php } ?>>Registro Civil - NIP</option>
                        <option value="4" <?PHP IF ($TipoDocumento == 4) { ?> selected="" <?php } ?>>Tarjeta Identidad</option>
                        <option value="5" <?PHP IF ($TipoDocumento == 5) { ?> selected="" <?php } ?>>Pasaporte</option>
                        <option value="6" <?PHP IF ($TipoDocumento == 6) { ?> selected="" <?php } ?>>Registro Civil - NUIP</option>
                        <option value="7" <?PHP IF ($TipoDocumento == 7) { ?> selected="" <?php } ?>>Permiso Especial de Permanencia</option>
                    </select>
                    </div> -->

                    <div class="form-group">
                        <label> Numer de Serial: </label>
                        <input type="text" class="form-control" id="ndocumento" value="<?= $NumDocumento ?>" name="ndocumento" placeholder="Numero de Serie" required="">

                    </div> 

                    <!--<div class="form-group">
                        <label> Correo: </label>
                        <input type="email" pattern="[^ @]*@[^ @]*" class="form-control" id="correo" value="<?= $Correo ?>" name="correo" placeholder="Correo Electronico" required="">
                    </div> -->

                   <div class="form-group">
                        <label> Tipo de Equipo: </label>
                        <select class="form-control"name="tusuario" id="tusuario"  required="true" >
                        <option value="0" <?PHP IF ($TipUsuario == 0) { ?> selected="" <?php } ?> disabled selected="">seleccione</option>

                        <option value="1" <?PHP IF ($TipUsuario == 1) { ?> selected="" <?php } ?>>Portatil</option>

                        <option value="2" <?PHP IF ($TipUsuario == 2) { ?> selected="" <?php } ?>>PC de Escritorio</option>

                        <option value="3" <?PHP IF ($TipUsuario == 3) { ?> selected="" <?php } ?>>Impresora</option>

                        <option value="3" <?PHP IF ($TipUsuario == 3) { ?> selected="" <?php } ?>>Articulo</option>

                    </select>
                    </div>
                      <!--<div class="form-group">
                        <label> Tipo Solicitud: </label>
                        <select class="form-control"name="tsolicitud" id="tsolicitud"  required="true" >
                        <option value="0" <?PHP IF ($TipSolicitud == 0) { ?> selected="" <?php } ?> disabled selected="">seleccione</option>
                        <option value="1" <?PHP IF ($TipSolicitud == 1) { ?> selected="" <?php } ?>>Computador</option>
                        <option value="2" <?PHP IF ($TipSolicitud == 2) { ?> selected="" <?php } ?>>Libro</option>
                        <option value="3" <?PHP IF ($TipSolicitud == 3) { ?> selected="" <?php } ?>>Revista</option>
                        <option value="3" <?PHP IF ($TipSolicitud == 4) { ?> selected="" <?php } ?>>Periodico</option>
                    </select>-->
                    </div> 

                    <div class="form-group">
                        <label> Estado Equipo: </label>
                        <select class="form-control"name="testado" id="testado"  required="true" >

                        <option value="0" <?PHP IF ($EstadoSoli == 0) { ?> selected="" <?php } ?> disabled selected="">--seleccione--</option>

                        <option value="1" <?PHP IF ($EstadoSoli == 1) { ?> selected="" <?php } ?>>En Venta</option>
                        <option value="2" <?PHP IF ($EstadoSoli == 2) { ?> selected="" <?php } ?>>Bodega</option>
                        <option value="3" <?PHP IF ($EstadoSoli == 3) { ?> selected="" <?php } ?>>Alquiler</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label> Marca: </label>
                      <select class="form-control"name="modulo" id="modulo"  required="true" >

                        <option value="0" <?PHP IF ( $Modulo == 0) { ?> selected="" <?php } ?> disabled selected="">Equipos</option>

                        <option value="1" <?PHP IF ( $Modulo == 1) { ?> selected="" <?php } ?>>HP</option>

                        <option value="2" <?PHP IF ( $Modulo == 2) { ?> selected="" <?php } ?>>Toshiba</option>
                        <option value="3" <?PHP IF ( $Modulo == 3) { ?> selected="" <?php } ?>>Asus</option>
                        <option value="4" <?PHP IF ( $Modulo == 4) { ?> selected="" <?php } ?>>Compaq</option>
                        <option value="5" <?PHP IF ( $Modulo == 5) { ?> selected="" <?php } ?>>Lenovo</option>
                        <option value="6" <?PHP IF ( $Modulo == 6) { ?> selected="" <?php } ?>>Dell</option>
                        <option value="0" <?PHP IF ( $Modulo == 0) { ?> selected="" <?php } ?> disabled selected="">Impresoras</option>

                        <option value="7" <?PHP IF ( $Modulo == 7) { ?> selected="" <?php } ?>>Epson</option>
                        <option value="8" <?PHP IF ( $Modulo == 8) { ?> selected="" <?php } ?>>HP</option>

                        <option value="9" <?PHP IF ( $Modulo == 9) { ?> selected="" <?php } ?>>LexMark</option>
                        <option value="10" <?PHP IF ( $Modulo == 10) { ?> selected="" <?php } ?>>Ricoh</option>
                        <option value="11" <?PHP IF ( $Modulo == 11) { ?> selected="" <?php } ?>>Modulo 11</option>
                        <option value="12" <?PHP IF ( $Modulo == 12) { ?> selected="" <?php } ?>>Modulo 12</option>
                        <option value="13" <?PHP IF ( $Modulo == 13) { ?> selected="" <?php } ?>>Ventanilla</option>
                        </select>
                    </div>

                    <div class="container text-center" >
                        <div class="botonesAccion"><?php
                            if (isset($_GET['id'])) {
                                ?>
                                <input type="hidden" id="id" name="id" value=" <?= $_GET['id'] ?>">
                                <div class="btn-group">
                                    <button type="submit" name="btnModificar" value="btnModificar" id="btnModificar" class="au-btn au-btn-icon au-btn--blue" ><i class="fa fa-floppy-o"></i> Modificar</button>
                                </div> 

                                <?php
                            } else {
                                ?>
                                <div class="btn-group">
                                    <button type="submit" name="btnAgregar" value="btnAgregar" id="btnAgregar" class="au-btn au-btn-icon au-btn--blue" ><i class="fa fa-lock fa-lg"></i> Agregar</button>
                                </div>
                                <?php
                            }
                            ?>   
                            &nbsp;&nbsp;
                            
                                <button type="button" class="au-btn au-btn-icon au-btn--blue" onclick="window.location.href = 'inicio.php';"><i class="fa fa-lock fa-lg"></i> Cancelar</button> 
                            </div>  

                            <div class="btn-group"><a href="equipos.php">Volver</a></div>
                        </div>
                    </div>
                </form>    
              </div>
            </section>
          </div>
        </div>





        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  



                            </div>
                            
                            
                            
                            
                            
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>



    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
