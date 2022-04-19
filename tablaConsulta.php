<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
$host="167.99.221.19";
$usuario="SuperUser";
$contraseña="SuperUser123";
$base="consultorio";

$conexion= new mysqli($host, $usuario, $contraseña, $base);


/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$resAlumnos=$conexion->query("SELECT * FROM usuarios WHERE verificacionapp = 'si' AND id_usuario = 3 ");


///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
echo '<table class="table" style="font-size:12px; margin-top:-1%;">

				<tr class="active">
					<th>ID ALUMNO</th>
					<th>NOMBRE</th>
					<th>CARRERA</th>
					<th>GRUPO</th>
				</tr>';

				while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
						 <td>'.$filaAlumnos['id_usuario'].'</td>
						 <td>'.$filaAlumnos['Nombre'].'</td>
						 <td>'.$filaAlumnos['ApellidoP'].'</td>
						 <td>'.$filaAlumnos['ApellidoM'].'</td>
						 </tr>';
				}
				echo '</table>';
?>