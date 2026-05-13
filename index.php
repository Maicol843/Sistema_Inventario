<!--INICIO DE SESION-->
<?php include "./inc/session_start.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!--HEADER-->
    <?php include "./inc/head.php"; ?>
</head>
<body>
    <!--NAVEGADOR-->
    <?php
        if(!isset($_GET['vista']) || $_GET['vista'] == ""){
            $_GET['vista'] = "login";
        }

        if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista'] != "login"
        && $_GET['vista'] != "404"){
            include "./inc/navbar.php";

            include "./vistas/".$_GET['vista'].".php";

            //JAVASCRIPT BULMA
            include "./inc/script.php"; 
        }else{
            if($_GET['vista'] == "login"){
                include "./vistas/login.php";
            }else{
                include "./vistas/404.php";
            }
        }
    ?>
</body>
</html>