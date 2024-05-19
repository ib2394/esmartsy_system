<?php
  include('sambungan.php');
?>

<link rel="stylesheet" href="senarai.css">
<table>
    <caption>SENARAI SOALAN</caption>
    <tr>
        <th>ID</th>
        <th>SOALAN</th>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>D</th>
        <th>JAWAPAN SEBENAR</th>
        <th>ID GURU</th>
    </tr>
    
    <?php
      $sql= 'select * from kuiz';
      $result= mysqli_query($sambungan, $sql);
      while($kuiz = mysqli_fetch_array($result)) {
        echo'<tr> <td>'.$kuiz["idsoalan"].'</td>
               <td>'.$kuiz["soalan"].'</td>
               <td>'.$kuiz["jawapana"].'</td>
               <td>'.$kuiz["jawapanb"].'</td>
               <td>'.$kuiz["jawapanc"].'</td>
               <td>'.$kuiz["jawapand"].'</td>
               <td>'.$kuiz["jawapansebenar"].'</td>
               <td>'.$kuiz["idguru"].'</td>
             </tr>';
      }
    ?>
</table>