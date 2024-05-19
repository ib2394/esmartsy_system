<?php
 include('sambungan.php');
?>
<html>
<link rel="stylesheet" href="senarai.css">
<link rel="stylesheet" href="button.css">
<body>
    <!-- untuk besarkan tulisan -->
    <div class="container">
        <div class="buttons">
            <span class="btn active" onclick="document.getElementById('text').style.fontSize = '1em'">A</span>
            <span class="btn" onclick="document.getElementById('text').style.fontSize = '1.25em'">A</span>
            <span class="btn" onclick="document.getElementById('text').style.fontSize = '1.75em'">A</span>
        </div>
    </div>
    
    <form action="jawab_semak.php" method="post">
    <table class="content" id="text">
        <caption>SOALAN KUIZ SYARIAH ISLAMIAH</caption>
        <tr>
            <th>Bil</th>
            <th>Soalan</th>
        </tr>
        <?php
        $sql = "select * from kuiz order by idsoalan ASC";
        $data = mysqli_query($sambungan, $sql);
        $bil = 1;
        while($kuiz = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td class="bil"><?php echo $bil; ?></td>
            <td class="soalan"> 
            <?php echo $kuiz['soalan']; ?><br>
            <input type="radio" name="<?php echo $kuiz['idsoalan']; ?>" value="A"><?php echo "A. ".$kuiz['jawapana']; ?><br>
            <input type="radio" name="<?php echo $kuiz['idsoalan']; ?>" value="B"><?php echo "B. ".$kuiz['jawapanb']; ?><br>
            <input type="radio" name="<?php echo $kuiz['idsoalan']; ?>" value="C"><?php echo "C. ".$kuiz['jawapanc']; ?><br>
            <input type="radio" name="<?php echo $kuiz['idsoalan']; ?>" value="D"><?php echo "D. ".$kuiz['jawapand']; ?><br>
            </td>
        </tr>
        <?php $bil = $bil + 1; } ?>
        </table>
        <button class="semak" type="submit">SEMAK</button>
    </form>
    </body>
</html>