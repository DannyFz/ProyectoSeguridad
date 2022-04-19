<?php
session_start();
include 'conexion.php';
$varsesion = $_SESSION['Usuario'];
$id = $_SESSION['ide'];

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$resAlumnos=$conexion->query("SELECT * FROM usuarios WHERE verificacionapp = 'si' AND id_usuario = '$id'");

while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
					echo"
                    <!DOCTYPE html>
                <html lang='es'>
                <head>
                <title>Inicio de sesión</title>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='stylesheet' href='./Vistas/recursosModal.css'>
                <link rel='stylesheet'  href='./bootstrap-5.1.3/css/bootstrap.min.css'> 
                <script src='./bootstrap-5.1.3/js/bootstrap.bundle.min.js'></script>
                    <script src='./ajax/libs/jquery/jquery.min.js'></script>
    
                    <link rel='icon' type='image/png' href='../Imagenes/ico2.png'>
    
                </head>
                    <div align = 'center' class='card'>
                    <div class='card-body'>
                    <h2>Acceso autorizado, bienvenido </h2>
                    <br>
                    <h3>$varsesion </h2>
                    <a type = 'button' class='btn btn-primary btn-lg ' href=DashboardAdmin.php>INICIAR SESION</a>
                    </div>
                    </div>
                    
                    
                    
                    ";
				}

?>