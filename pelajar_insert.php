<?php
include("sambungan.php");

$idpelajar= $_POST["idpelajar"];
$namapelajar= $_POST["namapelajar"];
$idkelas= $_POST["idkelas"];
$passpelajar= $_POST["passpelajar"];

$sql = "insert into pelajar values('$idpelajar','$namapelajar','$idkelas','$passpelajar')";
$result = mysqli_query($sambungan,$sql);
if ($result == true)
    echo "berjaya tambah";
else
    echo "tidak berjaya tambah";
?>