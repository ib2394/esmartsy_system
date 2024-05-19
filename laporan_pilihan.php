<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body>
    <h3 class = "panjang">PILIHAN JENIS LAPORAN</h3>
    <form class = "panjang" action="laporan_cetak.php" method="post">
        
        <select id='pilihan' name='pilihan' onchange='papar_pilihan()'>
            <option value=1>SEMUA KELAS DAN MARKAH</option>
            <option value=2>MENGIKUT KELAS</option>
            <option value=3>MENGIKUT MARKAH</option>
            <option value=4>MENGIKUT KELAS DAN MARKAH</option>
        </select><br>
        
        <div id="kelas" style="display:none;">
            <select name="idkelas">
            <?php
                include('sambungan.php');
                $sql = "select * from kelas";
                $data = mysqli_query($sambungan,$sql);
                while($kelas = mysqli_fetch_array($data)) {
                    echo "<option value='$kelas[idkelas]'>$kelas[namakelas]</option>";
                }
                ?>
            </select>
        </div>
        
        <div id="markah" style="display:none;">
            <select name="markah"> 
                <option value=80>LEBIH 80</option>
                <option value=50>LEBIH 50</option>
                <option value=0>KURANG 50</option>
            </select>
        </div>
        <button class="papar" type="submit">PAPAR</button>
    </form>
    
    
    <script>
        function papar_pilihan() {
            var pilih = document.getElementById("pilihan").value;
            var paparKelas= 'none';
            var paparMarkah = 'none';
            if (pilih == 1) {
                   paparKelas = 'none';
                   paparMarkah = 'none';
            }
            else if (pilih == 2) {
                    paparKelas = 'block';
                    paparMarkah = 'none';
            }
            else if (pilih == 3) {
                    paparKelas = 'none';
                    paparMarkah = 'block';
            }
            else if (pilih == 4) {
                    paparKelas = 'block';
                    paparMarkah = 'block';
            }
            document.getElementById('kelas').style.display = paparKelas;
            document.getElementById('markah').style.display = paparMarkah;
        }
    </script>
    </body>
</html>