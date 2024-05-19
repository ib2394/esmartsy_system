<?php
include("sambungan.php");

$idsoalan = $_POST["idsoalan"];
$soalan = $_POST["soalan"];
$jawapana= $_POST["jawapana"];
$jawapanb= $_POST["jawapanb"];
$jawapanc= $_POST["jawapanc"];
$jawapand= $_POST["jawapand"];
$jawapansebenar= $_POST["jawapansebenar"];
$idguru= $_POST["idguru"];

$sql = "update kuiz set soalan ='$soalan',jawapana ='$jawapana', jawapanb ='$jawapanb', jawapanc ='$jawapanc', jawapand ='$jawapand', jawapansebenar ='$jawapansebenar', idguru ='$idguru' where idsoalan='$idsoalan' ";

$result = mysqli_query($sambungan,$sql);
if($result == true)
   echo "berjaya kemaskini";
else
   echo "tidak berjaya kemaskini";
?>