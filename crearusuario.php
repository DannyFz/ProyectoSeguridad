<?php
include 'conexion.php';
if(isset($_POST['Guardar'])){
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['contrasena'];


            $query = "INSERT INTO usuarios(Usuario,Contrasena) values('$Usuario','$Contrasena')";

            $resultado = mysqli_query($conexion,$query);

            if($resultado){
                        echo"<!DOCTYPE html>
                        <html lang='es'>
                        <head>
                          <title>Completado</title>
                          <meta charset='utf-8'>
                          <meta name='viewport' content='width=device-width, initial-scale=1'>
                           <link rel='stylesheet' href='../Vistas/recursosModal.css'>
                           <link rel='stylesheet'  href='../bootstrap-5.1.3/css/bootstrap.min.css'> 
                           <script src='../bootstrap-5.1.3/js/bootstrap.bundle.min.js'></script>
                           <script src='../ajax/libs/jquery/jquery.min.js'></script>
                           <link rel='icon' type='image/png' href='../Imagenes/ico2.png'>
                        </head>
                           <body>
                           
                           <div class='container '>
                       
                           <!-- Modal -->
                           <div class='modal fade' id='myModal' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true' style='background: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);'>
                             <!-- Vertically centered modal -->
                             <div class='modal-dialog  modal-xl modal-dialog-centered' >
                               <div class='modal-content' style=''>
                             
                                 <div class='modal-body' style='text-align:center;margin:8px; '>
                           
                                    <div>
                                       <img style='width:100px;height:100px' src='../imagenes/check.png'>
                                    </div>
                                     
                                    <div>
                                        <h1 align='center' class=''>Acción Completada</h1>
                                        <h5>Antecedente añadido correctamente</h5>
                                    </div>
                                           
                                    <div>
                                        <a class='btn text-primary' style='margin:5px;' href='../index.php' ><b> Aceptar</b> </a>
                                    </div>
                           
                           
                                 </div>
                                 
                               </div>
                             </div>
                           </div>
                       
                           <!--MOSTRAR MODAL AL CARGAR PÁGINA-->
                               <script>
                           
                                 $( document ).ready(function() {
                                       $('#myModal').modal('show');
                                 });
                               </script>
                           </body>
                           </html>";
                    }else{
                        
                    }
                
                }
            
 ?>
    


