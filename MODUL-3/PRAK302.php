<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
    <style>
        .gambar {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="tinggi">Tinggi :</label>
        <input type="number" name="tinggi" id="tinggi" required>
        <br><br>
        <label for="alamat">Alamat Gambar :</label>
        <input type="text" name="alamat" id="alamat" required>
        <br><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $tinggi = $_POST['tinggi'];
        $alamat = $_POST['alamat'];
        
        $i = 1;
        // Loop utama untuk mengatur jumlah baris ke bawah
        while ($i <= $tinggi) {
            
            // Loop kedua untuk mencetak "spasi" agar gambar terdorong ke kanan
            $j = 1;
            while ($j < $i) {
                echo "<img src='$alamat' class='gambar' style='opacity: 0;'>";
                $j++;
            }
            
            // Loop ketiga untuk mencetak gambar yang sesungguhnya
            $k = $tinggi;
            while ($k >= $i) {
                echo "<img src='$alamat' class='gambar'>";
                $k--;
            }
            
            echo "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>