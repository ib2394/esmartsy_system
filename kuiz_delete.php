<?php
include("sambungan.php");

$idsoalan = $_POST["idsoalan"];

$sql = "delete from kuiz where idsoalan='$idsoalan'";
$result = mysqli_query($sambungan,$sql);
if($result == true) {
    $bilrekod = mysqli_affected_rows($sambungan);
    if ($bilrekod > 0)
    echo "Rekod berjaya di padam";
else
    echo "tidak berjaya padam";
}
else
    echo "Ralat :
    $sql<br>".mysqli_error($sambungan);
?>