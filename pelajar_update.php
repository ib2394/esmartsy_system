<?php
include("sambungan.php");

$idpelajar= $_POST["idpelajar"];
$namapelajar= $_POST["namapelajar"];
$idkelas= $_POST["idkelas"];
$passpelajar= $_POST["passpelajar"];

$sql="update pelajar set namapelajar= '$namapelajar',idkelas='$idkelas', passpelajar='$passpelajar' where idpelajar='$idpelajar'";
$result = mysqli_query($sambungan, $sql);
if ($result == true)
    echo "berjaya kemaskini";
else
    echo "Ralat :
    $sql<br>".mysqli_error($sambungan);
?>