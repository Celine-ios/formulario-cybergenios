<?php
 /**
  *
  */
 class database
 {

   function __construct()
   {
     $this->user = 'root';
     $this->server = '127.0.0.1:3306';

   }
   function con() {
     $conn = mysqli_connect($this->server, $this->user);
     return $conn;
   }
   function sel($conn) {
     $sel = mysqli_select_db($conn,'cybergenios');
     return $sel;
   }
 }

 ?>
