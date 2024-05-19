<?php
include("sambungan.php");

$idguru= $_POST["idguru"];
$namaguru= $_POST["namaguru"];
$passguru= $_POST["passguru"];

$sql="update guru set namaguru='$namaguru',passguru='$passguru' where idguru='$idguru'";
$result = mysqli_query($sambungan,$sql);
if ($result == true)
    echo "berjaya kemaskini";
else
    echo "tidak berjaya kemaskini";
?>