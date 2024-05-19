<?php
  include('sambungan.php');
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
?>
<link rel="stylesheet" href="senarai.css">

<table>
  <caption>SKEMA DAN KEPUTUSAN</caption>
  <tr>
     <th>Bil</th>
     <th>Soalan</th>    
     <th>Skema</th>   
  </tr>
  <?php
    $jumlah = 0;
    $betul = 0;
    $idpelajar = $_SESSION['username'];
$sql = "select * from jawapan join kuiz on jawapan.idsoalan = kuiz.idsoalan where idpelajar ='".$idpelajar."'";
$data = mysqli_query($sambungan, $sql);
    $bil = 1;
    while ($jawapan = mysqli_fetch_array($data)) {
    ?>
   <tr>
      <td class="bil"><?php echo $bil; ?></td>
      <td class="soalan">
       
        <?php
        echo $jawapan['soalan']."<br>";
        echo "A.".$jawapan['jawapana']."<br>";
        echo "B.".$jawapan['jawapanb']."<br>";        
        echo "C.".$jawapan['jawapanc']."<br>"; 
        echo "D.".$jawapan['jawapand']."<br>";
        ?>
      </td>
       
      <td class="skema">
        <?php
            echo "Jawapannya : ".$jawapan['jawapansebenar']."<br>";
            echo "Anda pilih ".$jawapan['jawapanpelajar']."<br>";
            if ($jawapan['jawapansebenar'] == $jawapan['jawapanpelajar']) {
                echo "<img src='betul.png'>";
                $betul = $betul + 1;
            }
            else
                echo "<img src='salah.png'>";
        ?>
       </td>
    </tr>
    <?php
        $bil = $bil + 1;
        $jumlah = $jumlah + 1;
      }
      ?>
</table>
<?php
   $salah = $jumlah - $betul;
   $markah = ($betul/$jumlah) * 100;

$sql = "update jawapan set markah = $markah where idpelajar = '".$idpelajar."'";
$data = mysqli_query($sambungan, $sql);
     
  ?>

<table>
  <caption>KEPUTUSAN PRESTASI INDIVIDU</caption>
  <tr>
     <th class="keputusan">Perkara</th>
     <th class="keputusan">Bilangan/Markah</th>
  </tr>
  <tr>
     <td class="keputusan">Bilangan yang betul</td>
     <td class="keputusan"><?php echo $betul ?></td>
  </tr>
  <tr>
     <td class="keputusan">Bilangan yang salah</td>
     <td class="keputusan"><?php echo $salah ?></td>
  </tr>
  <tr>
     <td class="keputusan">Jumlah soalan</td>
     <td class="keputusan"><?php echo $jumlah ?></td>
  </tr>
  <tr>
     <td class="keputusan">Keputusan</td>
     <td class="keputusan"><?php echo number_format ($markah) ?>%</td>
  </tr>
</table>