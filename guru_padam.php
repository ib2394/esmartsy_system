<?php
  include("sambungan.php");
  session_start();
  $idpelajar = $_POST['idpelajar'];
  $sql = "delete from pelajar where idpelajar = '$idpelajar'";
  $result = mysqli_query($sambungan, $sql);
  if($result == true)
      echo "berjaya padam rekod";
  else 
      echo "tidak berjaya padam rekod";
?>