<?php
include("sambungan.php");

$idguru= $_POST["idguru"];
$namaguru= $_POST["namaguru"];
$passguru= $_POST["passguru"];

$sql = "insert into guru values('$idguru','$namaguru','$passguru')";
$result = mysqli_query($sambungan,$sql);
if ($result == true)
    echo "berjaya tambah";
else
    echo "Ralat :
    $sql<br>".mysqli_error($sambungan);
?>