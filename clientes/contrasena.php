<?php
session_start();
if(isset($_SESSION['LogueadoCliente']))
{
    ?>
    <script type="text/javascript">
      window.location="proto-alliance.php";
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Nueva contraseña</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image:url(assets/img/homelogin.jpg);padding-top:10%;">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <!--<img src="images/img-01.png" alt="IMG">-->
          <center><img src="../admin/img/logo.png" alt="IMG" class="img img-responsive" style="padding-top: 50px;"></center>
        </div>

        <form class="login100-form validate-form" action="Controller/nuevacontrasena.php" method="POST">
          <span class="login100-form-title">
            ¿Eres nuevo  usuario?
          </span>
          <p align="center">A continuación configuraremos tu nueva contraseña, pero primero necesitamos saber tu correo electrónico</p>
          <br>

          <div class="wrap-input100 validate-input" data-validate = "Email incorrecto">
            <?php
            $IdUsuario=$_GET["Id"];
            ?>
            <input type="hidden" name="IdUsuario" value="<?=$IdUsuario?>">
            <input class="input100" type="text" name="correoe" placeholder="Correo electrónico">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100">
            <input class="input100" type="password" name="contrasena" placeholder="Contraseña">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100">
            <input class="input100" type="password" name="contrasena2" placeholder="Repita Contraseña">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          

          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Crear Contraseña
            </button>
          </div>
<!--
          <div class="text-center p-t-12">
            <span class="txt1">
              ¿Olvidaste tu 
            </span>
            <a class="txt2" href="olvido-contrasena.html">
              Contraseña?
            </a>
          </div>
-->
          <div class="text-center p-t-136">
            <!--<a class="txt2" href="#">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>-->
          </div>
        </form>
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>