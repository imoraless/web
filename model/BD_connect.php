<?php
   // $conn = pg_connect("host=127.0.0.1 dbname=tdiwa12 user=tdiw-a12 password=AoNFEosr");

   $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
   $instancia = new PDO('mysql:host=localhost;dbname=bd_web', 'root' ,'', $opciones);
  

?>
