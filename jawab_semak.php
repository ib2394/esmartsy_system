<?php
  include('sambungan.php');
  session_start();
  $idpelajar = $_SESSION['username'];
  date_default_timezone_set("Asia/Kuala_Lumpur");
  $tarikh = date('d/m/Y');
  $sql = "select * from kuiz order by idsoalan ASC";
  $data = mysqli_query($sambungan, $sql);
  while($kuiz = mysqli_fetch_array($data)) {
      $idsoalan = $kuiz['idsoalan'];
      $jawapanpelajar = $_POST["$idsoalan"];
      $sql = "insert into jawapan values('$idpelajar', '$idsoalan', '$tarikh', '$jawapanpelajar',0)";
      $datajawapan = mysqli_query($sambungan, $sql);
  }
  include('jawab_ulangkaji.php');
?>