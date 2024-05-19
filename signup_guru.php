<?php
include('sambungan.php');
if(isset($_POST['idguru'])) {
    $idguru = $_POST["idguru"];
    $namaguru = $_POST["namaguru"];
    $passguru = $_POST["passguru"];
    $sql = "insert into guru 
    values('$idguru','$namaguru','$passguru')";
    
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
<body background='paper.jpg'>
    <center>
    <img class="pp" src='profile_pic.png'><br>
    </center>

    <h3 class="panjang">SIGN UP GURU</h3>
    <form class="panjang" action="signup_guru.php" method="post">
    <table>
        <tr>
            <td>ID GURU :</td>
            <td><input type="text" id="idguru" onblur="semak()" name="idguru" placeholder="G000 max 4 aksara" pattern="[A-Z0-9]{4}" oninvalid="this.setCustomValidity('Sila masukkan 4 aksara')" oninput="this.setCustomValidity('')"></td>
        </tr>
        <tr>
            <td>NAMA :</td>
            <td><input type="text" name="namaguru" placeholder="FULL NAME"></td>
        </tr>
        <tr>
            <td>PASSWORD :</td>
            <td><input type="password" name="passguru" placeholder="max: 12 char"></td>
        </tr>
        </table>
        <button class="tambah" type="submit">DAFTAR</button>
        <button class="semula" type="reset">RESET</button>
        <button class="padam" type="button" onclick="window.location='login.html'">BATAL</button>
    </form>
    <center>
    <img class="pp1" src='sign-up2.svg'>
    </center>
</body>