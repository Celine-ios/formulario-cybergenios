<?php 

	include '../../class/database.php';

	$database = new database();
	$con = $database->con();
	$sel = $database->sel($con);

	$query = mysqli_query($con, 'select * from usuarios where ID_CLIENTE='.$client_id);
	$row = mysqli_fetch_array($query, MYSQLI_BOTH);

	echo '<ul>
 		<li>Id Cliente: '.$row['ID_CLIENTE'].' </li>
 		<li>Id Operador: '.$row['ID_OPERADOR'].' </li>
 		<li>Nombre: '.$row['NOMBRE'].'</li>
 		<li>Apellido: '.$row['APELLIDO'].'</li>
 		<li>Cumpleaños: '.$row['CUMPLE'].'</li>
 		<li>Correo: '.$row['CORREO'].'</li>
 		<li>Teléfono: '.$row['TELEFONO'].'</li>
 		<li>Fecha de Jornada: '.$row['FECHA_JORNADA'].'</li>
 	</ul>';

 ?>
 