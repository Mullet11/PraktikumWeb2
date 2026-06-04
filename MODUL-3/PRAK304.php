<?php
// Inisialisasi variabel bintang
$bintang = 0;

// Mengecek apakah ada data jumlah bintang yang dikirimkan (dari input pertama atau input hidden)
if (isset($_POST['bintang'])) {
    $bintang = $_POST['bintang'];
}

// Logika ketika tombol Tambah ditekan
if (isset($_POST['tambah'])) {
    $bintang++; // Menambah 1
}

// Logika ketika tombol Kurang ditekan
if (isset($_POST['kurang'])) {
    $bintang--; // Mengurangi 1
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
    <style>
        .bintang-img {
            width: 70px;
            height: 70px;
        }
    </style>
</head>
<body>

    <?php if ($bintang == 0): ?>
        <form action="" method="POST">
            <label for="bintang">Jumlah bintang</label>
            <input type="number" name="bintang" id="bintang" required>
            <br><br>
            <button type="submit" name="submit">Submit</button>
        </form>

    <?php else: ?>
        <?php
        echo "Jumlah bintang $bintang <br><br>";
        
        // Perulangan untuk mencetak gambar bintang sebanyak nilai $bintang
        for ($i = 0; $i < $bintang; $i++) {
            echo "<img src='gambar_soal_3&4.png' class='bintang-img'> ";
        }
        ?>
        
        <br><br>
        <form action="" method="POST">
            <input type="hidden" name="bintang" value="<?= $bintang ?>">
            
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php endif; ?>

</body>
</html>