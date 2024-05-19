<?php
include('sambungan.php');
session_start();

if(isset($_POST['userid'])) {
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    
    $sql = "select * from pelajar";
    $result = mysqli_query($sambungan, $sql);
    $jumpa = FALSE;
    while($pelajar = mysqli_fetch_array($result)) {
        if($pelajar['idpelajar']==$userid && $pelajar["passpelajar"]== $password) {
            $jumpa = TRUE;
            $_SESSION['username']=$pelajar['idpelajar'];
            $_SESSION['nama']=$pelajar['namapelajar'];
            $_SESSION['status']='pelajar';
            break;
        }
    }
    
    if($jumpa==FALSE) {
        $sql="select * from guru";
        $result = mysqli_query($sambungan, $sql);
        while($guru = mysqli_fetch_array($result)) {
            if($guru['idguru']==$userid && $guru["passguru"]== $password){
                $jumpa = TRUE;
                $_SESSION['uername']=$guru['idguru'];
                $_SESSION['nama']=$guru['namaguru'];
                $_SESSION['status']= 'guru';
                break;
            }
        }
    }
    
    if($jumpa == TRUE) {
        header("Location: utama.html");
    }
    else
        echo " <script>alert('kesalahan pada username atau password');
               window.location='login.php'</script> ";
}
?>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body background='gif2.gif'>
    <center>
            <div class="login-container">
                <img class="avatar" src="profile_pic1.png">
            </div>
    </center>
    <h3 class="pendek">LOGIN</h3>
    <form class="pendek" action=login.php method=post class="login">
        <table>
            <tr> 
                <td><img src="profile.png"></td>
                <td><input type="text" name="userid" placeholder="idpengguna"></td>
            </tr>
            <tr>
                <td><img src="password.png"></td>
                <td><input type="password" name="password" placeholder="password"></td>
            </tr>
        </table>
        
        <button class="login" type="submit">LOGIN</button>
        <button class="semula" type="reset">RESET</button>
        <button class="keluar" type="button" onclick="window.location='login.html'">KELUAR</button>
    </form>
</body>