<?php
include("sambungan.php");

$idsoalan= $_POST["idsoalan"];
$soalan= $_POST["soalan"];
$jawapana= $_POST["jawapana"];
$jawapanb= $_POST["jawapanb"];
$jawapanc= $_POST["jawapanc"];
$jawapand= $_POST["jawapand"];
$jawapansebenar= $_POST["jawapansebenar"];
$idguru= $_POST["idguru"];

$sql = "insert into kuiz values('$idsoalan','$soalan','$jawapana','$jawapanb','$jawapanc','$jawapand','$jawapansebenar','$idguru')";
$result = mysqli_query($sambungan,$sql);
if ($result == true)
    echo "berjaya tambah";
else
    echo "tidak berjaya tambah";
?>