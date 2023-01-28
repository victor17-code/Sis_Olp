<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Olpasa | Inicio</title>

    <link rel="icon" href="vistas/img/plantilla/logo-mini.png">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
    <!--  -->
    <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- JAVA SCRIPT -->

    <!-- jQuery 3 -->
    <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini login-page">

    <?php

        if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {     
echo '<div class="wrapper">';

        include 'modulos/header.php';
        include 'modulos/menu.php';

        if (isset($_GET['ruta'])) {
            if (
                $_GET['ruta'] == "inicio" ||
                $_GET['ruta'] == "usuarios" ||
                $_GET['ruta'] == "sectores" ||
                $_GET['ruta'] == "accionistas" ||
                $_GET['ruta'] == "salir"
            ) {
                include "modulos/" . $_GET["ruta"] . ".php";
            }else{
                include 'modulos/404.php';
            }
        }else {
            include 'modulos/inicio.php';
        }


        include 'modulos/footer.php';

        echo '</div>';
    }else {
        include 'modulos/login.php';
    }
        ?>
    <!-- ======================    
        ========================= -->



    <script src="vistas/js/plantilla.js"></script>
</body>

</html>