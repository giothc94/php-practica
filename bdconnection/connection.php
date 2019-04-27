<?php
  $host='localhost';
  $dbase='diseñoweb';
  $user='root';
  $pass='180520124991otni';
  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbase","$user","$pass");
  } catch (Exception $e) {    
  }
 ?>
