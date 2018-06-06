<?php
include '../class/database.php';
$name = $_POST['nombres'];
$lastname = $_POST['apellidos'];
$bday = $_POST['fecha_cumpleanos'];
$email = $_POST['correo'];
$tel = $_POST['tel'];
$client_id = $_POST['id_cliente'];
$operator_id = $_POST['id_op'];
$journey_date = $_POST['fecha_jornada'];

$database = new database();
$conn = $database->con();
$sel = $database->sel($conn);

$sql = "INSERT INTO usuarios(NOMBRE, APELLIDO, CUMPLE, CORREO, TELEFONO, ID_CLIENTE, ID_OPERADOR, FECHA_JORNADA) VALUES('".$name."','".$lastname."',".$bday.",'".$email."',".$tel.",".$client_id.",".$operator_id.",".$journey_date.");";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query, MYSQLI_BOTH);

 ?>
