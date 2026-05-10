<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
    <style>
        .bintang {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="bawah">Batas Bawah :</label>
        <input type="number" name="bawah" id="bawah" required>
        <br>
        <label for="atas">Batas Atas :</label>
        <input type="number" name="atas" id="atas" required>
        <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        
        // Memastikan batas bawah tidak lebih besar dari batas atas
        if ($bawah <= $atas) {
            $i = $bawah;
            
            do {
                if (($i + 7) % 5 == 0) {
                    echo "<img src='gambar_soal_3&4.png' class='bintang'> ";
                } else {
                    echo $i . " ";
                }
                
                $i++;
            } while ($i <= $atas);
            
        } else {
            echo "Error: Batas Bawah tidak boleh lebih besar dari Batas Atas.";
        }
    }
    ?>
</body>
</html>