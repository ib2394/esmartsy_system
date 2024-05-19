<?php
include('sambungan.php');
$namajadual = $_POST['namatable'];
$namafail = $_FILES['namafail']['name'];
$fail = fopen($namafail, "r");  
while (!feof($fail)) {
    
    $medan = explode(",", fgets($fail));
    
    if ($namajadual === "pelajar") {
        $idpelajar = $medan[0];
        $namapelajar = $medan[1];
        $idkelas = $medan[2];
        $passpelajar = $medan[3];
        $sql = "insert into pelajar values('$idpelajar', '$namapelajar', '$idkelas', '$passpelajar')";
        if (mysqli_query($sambungan, $sql))
            $berjaya = true;
        else 
            $berjaya = false;
    }
    
    if ($namajadual === "guru") {
        $idguru = $medan[0];
        $namaguru = $medan[1];
        $passguru = $medan[2];
        $sql = "insert into guru values('$idguru', '$namaguru', '$passguru')";
        if (mysqli_query($sambungan, $sql))
            $berjaya = true;
        else
            $berjaya = false;
    }
}
if ($berjaya === true)
    echo "<script>alert('REKOD BERJAYA DIIMPORT');</script>";
else
    echo "<script>alert('REKOD TIDAK BERJAYA DIIMPORT');</script>";
mysqli_close($sambungan);
?>