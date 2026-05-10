<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK-204</title>
</head>
<body>
    <?php  
    // inisialisasi
    $nilai = "";
    $hasil = "";

    // mengecek apakah tombol submit sudah ditekan
    if (isset($_POST['submit'])) {
        // buat cegah error jika input kosong
        if ($_POST['nilai'] !== "") {
            $nilai = $_POST['nilai'];

            // logika kondisional untuk menentukan ejaan bilangan
            if ($nilai == 0) {
                $hasil = "Nol";
            } elseif ($nilai >= 1 && $nilai < 10){
                $hasil = "Satuan";
            } elseif ($nilai >= 11 && $nilai < 20) {
                $hasil = "Belasan";
            } elseif ($nilai == 10 || $nilai >= 20 && $nilai <100) {
                $hasil = "Puluhan";
            } elseif ($nilai >=100 && $nilai < 1000) {
                $hasil = "Ratusan";
            } elseif ($nilai >= 1000) {
                $hasil = "Anda Menginput Melebihi Limit Bilangan";
            } else {
                $hasil = "Input tidak valid";
            }
        }
    }
    ?>

    <form action="" method="post">
        Nilai: <input type="number" name="nilai" value="<?= htmlspecialchars($nilai) ?>" required><br>
        <button type="submit" name="submit">Konversi</button>
    </form>
    <br>

    <?php  
    // untuk menampilkan hasil jika variabel nilai sudah terisi
    if ($hasil !== "") {
        echo "<b>Hasil: $hasil</b>";
    }
    ?>
</body>
</html>