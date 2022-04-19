<?php
session_start();
include './conexion.php';
$varsesion = $_SESSION['Usuario'];
$idusuario = $_SESSION['ide'];
 ?>

<!DOCTYPE html>
<html lang="es" >
<head>
	<link rel="icon" type="image/png" href="../Imagenes/ico2.png">
	<meta charset="utf-8">
	<title>Expediente Clinico | San Pablo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
 <link rel="stylesheet"  href="./bootstrap-5.1.3/css/bootstrap.min.css"> 
 <link rel = "stylesheet" type="text/css" href="./css/bootstrap.min.css"><!--version 3 de bootstrap-->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
<script src="./jQuery/jquery-3.5.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>



</head>
<body >

<script type="text/javascript">
	function tiempoReal()
		{
			var tabla = $.ajax({
				url:'verificado.php',
				dataType:'text',
				async:false
			}).responseText;

			document.getElementById("miTabla").innerHTML = tabla;
		}
		setInterval(tiempoReal, 10);
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-tr">
                      <a class="navbar-brand" href="#"><img src ="" width="150" heigth="150" ></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav">
                            <a class="nav-item nav-link" href="Administrador.php">INICIO</a>
                            <li class="nav-item dropdown position-absolute end-0">
                                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="../Procesos/cerrar_sesion.php"><img style="width:15px;height: 15px;" src="../Imagenes/icons/salir.png">&nbsp;&nbsp;Cerrar sesión</a>
                                </div>
                              </li>
                          </div>
                        </div>
                  </nav>
<br>
<br>
<h2>Por favor, como método de seguridad, en tu aplicación permite el acceso a tu cuenta, una vez des acceso te aparecera un botón una vez hayas confirmado el acceso.</h2>
<br>
<br>
<section id="miTabla">
		</section>
		
<br>
<BR>
<BR>

<!--footer-->
       
<div align="center" style="margin-top:100px; margin-bottom:-10px;">
  <footer class="page-footer font-small blue pt-4"  >
        <div class="container-fluid text-center text-md-left"  >
          <div class="row" style="background-color: black">
                  <div class="col-xl-12" align="center" >
                      <h5 class="text-uppercase" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; color: white">Desarrollador&nbsp;&nbsp;<img src="../Imagenes/icons/des.png" style="width:30px;height:30px;">:&nbsp;&nbsp;</h5>
                        <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; color: white"> José Luis Ibarra Llamas
                      <br><a href="mailto:luisitp123@gmail.com.mx">&nbsp;&nbsp;devjoseluiscontacto@gmail.com</a></p>
                      <div class="footer-copyright text-center py-3" style="color: white" >© 2022 Copyright</div>
                  </div>
            
            </div>
        
      </div>
        
  </footer>
	</div>
				
	<!--Fin footer-->

	

</body>
</html>