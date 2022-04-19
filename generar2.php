<?php
session_start();
$email = $_SESSION['correito'];
$ide =  $_SESSION['ide'];

//$email =$_POST['email'];

$x = 0;
$y = 5;
$Strings = '0123456789abcdefghijklmnopqrstuvwxyz';
echo $codigo=substr(str_shuffle($Strings), $x, $y), "\n";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

    
$mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'dvolibear.12@gmail.com';                 
    $mail->Password   = 'Danny0054';                               
    $mail->SMTPSecure = 'tls';          
    $mail->Port       = 587;      
    
    $mail->setFrom('dvolibear.12@gmail.com', 'Danny');
    $mail->addAddress($email);
    $mail -> Subject="Bienvenido al hospital San Pablo";
    $mail -> msgHTML('<div style=" color:black; border-color:green; 
    border-radius:5px"><h2>Bienvenido</h2>Este es tu codigo de confirmacion: '.$codigo.'</div>');

    include 'conexion.php';
    $consulta = "UPDATE usuarios SET codigo = '$codigo' WHERE id_usuario = '$ide' ";
    $resultado = mysqli_query($conexion, $consulta);

    if(!$mail -> send()){
        echo $mail -> ErrorInfo;
    }else{
        echo "Enviado correctamente";
        header("location:codigoconfirmacion2.php");
        
    }



?>