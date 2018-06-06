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

echo $name.'<br>';
echo $lastname.'<br>';
echo $bday.'<br>';
echo $email.'<br>';
echo $tel.'<br>';
echo $client_id.'<br>';
echo $operator_id.'<br>';
echo $journey_date;
 ?>
