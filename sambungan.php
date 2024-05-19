<?php
   $host = 'localhost';
   $user = 'root';
   $password = 'admin123';
   $database = 'esmartsy';

   $sambungan = mysqli_connect($host, $user, $password, $database)
      or die('Sambungan ke pangkalan data gagal');
      echo 'Sambungan ke pangkalan data berjaya';
?>