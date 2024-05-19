<html>
    <link rel="stylesheet" href="senarai.css">
    <link rel="stylesheet" href="button.css">
    <body>
        <table>
            <tr>
                <th>BIL</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>TARIKH</th>
                <th>MARKAH</th>
            </tr>
        <?php
            include('sambungan.php');
            $pilihan = $_POST["pilihan"];
                 $idkelas = $_POST["idkelas"];
                 $markah = $_POST["markah"];
            $sql = "select * from jawapan
                  join pelajar on jawapan.idpelajar = pelajar.idpelajar
                  join kelas on pelajar.idkelas = kelas.idkelas group by jawapan.idpelajar ";
            
            //PILIH SALAH SATU
            switch($pilihan) {
                case 1 : $syarat ="";
                    $tajuk = "PENCAPAIAN KESELURUHAN"; break;
                case 2 : $syarat = "having kelas.idkelas = '$idkelas'";
                    $tajuk = "PENCAPAIAN MENGIKUT KELAS";break;
                case 3 : 
                    if($markah == 80) {
                        $syarat = "having markah >= 80";
                        $tajuk = "PENCAPAIAN LEBIH DARI 80%";
                    }
                    else if($markah == 50){
                        $syarat = "having markah >=50";
                        $tajuk = 'PENCAPAIAN LEBIH DARI 50%';
                    }
                    else if($markah == 0){
                        $syarat = "having markah < 50";
                        $tajuk = "PENCAPAIAN KURANG DARI 50%";
                    }
                    break;
                case 4;
                    if($markah == 80){
                        $syarat = "having markah >=80 and kelas.idkelas = '".$idkelas."'";
                        $tajuk = "PENCAPAIAN MENGIKUT KELAS DAN LEBIH 80%";
                    }
                    else if($markah == 50){
                        $syarat = "having markah >=50 and kelas.idkelas = '".$idkelas."'";
                        $tajuk = "PENCAPAIAN MENGIKUT KELAS DAN LEBIH 50%";
                    }
                    else if($markah == 0){
                        $syarat = "having markah < 50 and kelas.idkelas = '".$idkelas."'";
                        $tajuk = "PENCAPAIAN MENGIKUT KELAS DAN KURANG 50%";
                    }
                    break;
            }
            $bil = 1;
            $sql = $sql.$syarat; //CANTUM
            //echo $sql;
            
            $data = mysqli_query($sambungan,$sql);
                while($kuiz = mysqli_fetch_array($data)) {
            ?>
            
               <tr>
                   <td><?php echo $bil; ?>.</td>
                   <td><?php echo $kuiz['namapelajar']; ?></td>
                   <td><?php echo $kuiz['namakelas']; ?></td>
                   <td><?php echo $kuiz['tarikh']; ?></td>
                   <td><?php echo $kuiz['markah']; ?>%</td>
            </tr>
            
            <?php
                    $bil = $bil+ 1;
                } //TAMAT WHILE
            ?>
            <caption><?php echo $tajuk; ?></caption>
        </table>
        <button class="cetak" onclick="window.print()">CETAK</button>
        <button class="kembali" type="button" onclick="window.location='laporan_pilihan.php'">KEMBALI</button>
    </body>
</html>