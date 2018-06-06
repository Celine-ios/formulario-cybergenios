<?php
 include '../class/database.php';
 $user = $_POST['user'];
 $password = $_POST['psw'];

 $database = new database();
 $conn = $database->con();
 $sel = $database->sel($conn);

 $sql = 'SELECT USUARIO, CONTRASENA FROM usuarios WHERE USUARIO="'.$user.'" AND CONTRASENA="'.$password.'"';
 $query = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($query, MYSQLI_BOTH);
 if ($row['USUARIO'] == '' || $row['CONTRASENA'] == '') {
   echo "Usuario no registrado, Por favor regístrese";
   return;
 }
 echo 'http://127.0.0.1/dashboard/formulario-cybergenios/form/';

 ?>
