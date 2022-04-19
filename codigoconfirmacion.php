<?php 
session_start();
$varsesion = $_SESSION['correito'];
$ide = $_SESSION['ide'];
//echo " este es tu id : $ide";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERIFICACION</title>

<!-- Bootstrap CSS -->
 <link rel="stylesheet"  href="./bootstrap-5.1.3/css/bootstrap.min.css"> 
 <link rel = "stylesheet" type="text/css" href="./css/bootstrap.min.css"><!--version 3 de bootstrap-->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
<script src="./jQuery/jquery-3.5.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>




</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-tr">
                      <a class="navbar-brand" href="#"><img src ="" width="150" heigth="150" ></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav">
                            <a class="nav-item nav-link" href="Administrador.php">INICIO</a>
                            
                          </div>
                        </div>
                  </nav>


<body>
    <br>
    <br>
    <br>
    <br>
    <center>
    <div class="card" style="width: 80%;" >
        <div class = "card-header">
    <H5 align="center" class="card-header">VERIFICACION</H2>
</div>
<div class="card-body">
    <div align="center">
    <form action="confirmarcodigo.php" method="post">
    <div class="form-group">
    <label>Ingresa el codigo de verificacion: <input type="text" placeholder="codigo" name="codigo"  class="form-control" required></label>
    <br>
    <input type="submit" value="CONFIRMAR" class="btn btn-primary" name="confirmar"></form>
    </div>
</div>
    </div>
</div>
</center>
</body>
<div align="center" style="margin-top:100px; margin-bottom:-10px;">
  <footer class="page-footer font-small blue pt-4"  >
        <div class="container-fluid text-center text-md-left"  >
          <div class="row" style="background-color: black">
                  <div class="col-xl-12" align="center" >
                      <h5 class="text-uppercase" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; color: white">Desarrolladores&nbsp;&nbsp;<img src="../Imagenes/icons/des.png" style="width:30px;height:30px;">:&nbsp;&nbsp;</h5>
                        <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; color: white"> José Luis Ibarra Llamas
                        <br><a href="mailto:luisitp123@gmail.com.mx">&nbsp;&nbsp;devjoseluiscontacto@gmail.com</a></p>
                        <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; color: white"> Daniel Escajeda Calvillo
                      <br><a href="mailto:dd567738@gmail.com">&nbsp;&nbsp;dd567738@gmail.com</a></p>
                      <div class="footer-copyright text-center py-3" style="color: white" >© 2022 Copyright</div>
                  </div>
            
            </div>
        
      </div>
        
  </footer>
	</div>
</html>