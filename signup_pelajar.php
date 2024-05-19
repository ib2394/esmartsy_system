<?php
include('sambungan.php');
if(isset($_POST['idpelajar'])) {
    $idpelajar = $_POST["idpelajar"];
    $namapelajar = $_POST["namapelajar"];
    $idkelas = $_POST["idkelas"];
    $passpelajar = $_POST["passpelajar"];
    $sql = "insert into pelajar values('$idpelajar','$namapelajar','$idkelas','$passpelajar')";
    
    $result = mysqli_query($sambungan, $sql);
    if($result)
        echo "<script>alert('BERJAYA SIGNUP')</script>";
    else
        echo "<script>alert('TIDAK BERJAYA SIGNUP')</script";
    echo "<script>window.location='login.php'</script>";
}
?>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body class="gambar" background='bg1.gif'>
    <center>
    <img class="avatar" src='avatar_gerak.gif'><br>
    </center>
    
    <h3 class="panjang">SIGN UP PELAJAR</h3>
    <form class="panjang" action="signup_pelajar.php" method="post">
    <table>
        <tr>
            <td>ID PELAJAR :</td>
            <td><input type="text" id="idpelajar" onblur="semak()" name="idpelajar" placeholder="P000 max 4 aksara" pattern="[A-Z0-9]{4}" oninvalid="this.setCustomValidity('Sila masukkan 4 aksara')" oninput="this.setCustomValidity('')"></td>
        </tr>
        <tr>
            <td>NAMA :</td>
            <td><input type="text" name="namapelajar" placeholder="FULL NAME"></td>
        </tr>
        <tr>
            <td>KELAS :</td>
            <td>
            <select name="idkelas">
            <?php
            $sql = "select*from kelas";
            $data =mysqli_query($sambungan, $sql);
            while($kelas = mysqli_fetch_array($data)) {
                echo"<option value='$kelas[idkelas]'>$kelas[namakelas]</option>";
            }
            ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>PASSWORD :</td>
            <td><input type="password" name="passpelajar" placeholder="max: 12 char"></td>
        </tr>
        </table>
        <button class="tambah" type="submit">DAFTAR</button>
        <button class="semula" type="reset">RESET</button>
        <button class="padam" type="button" onclick="window.location='login.html'">BATAL</button>
    </form>
</body>