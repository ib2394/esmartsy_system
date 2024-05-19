<?php
  include('sambungan.php');
?>

<link rel="stylesheet" href="senarai.css">
<table>
    <caption>SENARAI NAMA PELAJAR</caption>
    <tr>
        <th>ID</th>
        <th>NAMA PELAJAR</th>
        <th>ID KELAS</th>
        <th>PASSWORD</th>
    </tr>
    
    <?php
      $sql= 'select * from pelajar';
      $result= mysqli_query($sambungan, $sql);
      while($pelajar = mysqli_fetch_array($result)) {
        echo'<tr> <td>'.$pelajar["idpelajar"].'</td>
               <td>'.$pelajar["namapelajar"].'</td>
               <td>'.$pelajar["idkelas"].'</td>
               <td>'.$pelajar["passpelajar"].'</td>
             </tr>';
      }
    ?>
</table>