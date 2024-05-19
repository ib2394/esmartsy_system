<?php
session_start();
$status = $_SESSION['status'];
$nama = $_SESSION['nama'];

echo "
<link rel='stylesheet' href='menu.css'>
<div>
<h1>MAIN MENU</h1>
<h2>$nama</h2>
";

if($status == "guru")
    echo'
    <ul>
      <li><a href="home.html" target=kandungan>HOME</a></li>
      <li><a href="menu_guru.html" target=menu>GURU</a></li>
      <li><a href="menu_pelajar.html" target=menu>PELAJAR</a></li>
      <li><a href="menu_kelas.html" target=menu>KELAS</a></li>
      <li><a href="menu_soalan.html" target=menu>SOALAN</a></li>
      <li><a href="laporan_pilihan.php" target=kandungan>LAPORAN</a></li>
      <li><a href="import.html" target=kandungan>IMPORT</a></li>
      <br>
      <li><a href="logout.php" target="_top">LOG OUT</a></li>
    </ul>
    </div>';
 
else
    echo'
    <ul>
     <li><a href="home.html" target=kandungan>HOME</a></li>
     <li><a href="jawab_mula.php" target=kandungan>SOALAN</a></li>
     <br>
     <li><a href="logout.php" target="_top">LOG OUT</a></li>
    </ul>
    </div>';
?>