<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK-203</title>
</head>
<body>
    <?php  
    //Inisialisasi variabel awal
    $nilai = $dari = $ke = $hasil = "";

    // mengecek apakah tombol submit ditekan
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'] ?? '';
        $ke = $_POST['ke'] ?? '';

        // memastikan semua isian tidak kosong
        if ($nilai !== "" && $dari !== "" && $ke !== "") {
            $celcius = 0; // variabel jembatan

            // mengkonversi satuan asal menjadi celcius
            if ($dari == "Celcius") {
                $celcius = $nilai;
            } elseif ($dari == "Fahrenheit") {
                $celcius = ($nilai - 32) * 5/9;
            } elseif ($dari == "Rheamur") {
                $celcius = $nilai * 5/4;
            } elseif ($dari == "Kelvin") {
                $celcius == $nilai - 273.15;
            }

            // mengkonversi dari celcius ke satuan tujuan
            if ($ke == "Celcius") {
                $hasil == $celcius . " &deg;C";
            } elseif ($ke == "Fahrenheit") {
                $hasil = ($celcius * 9/5) + 32 . " &deg;F";
            } elseif ($ke == "Rheamur") {
                $hasil = ($celcius * 4/5) . " &deg;R";
            } elseif ($ke == "Kelvin") {
                $hasil = ($celcius + 273.15) . " &deg;K";
            }
        }
    }
    ?>

    <form action="" method="post">
        Nilai: <input type="number" step="any" name="nilai" value="<?= htmlspecialchars($nilai) ?>"><br>
        
        Dari:<br>
        <input type="radio" name="dari" value="Celcius" <?= ($dari == "Celcius") ? "checked" : "" ?>> Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit" <?= ($dari == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="Rheamur" <?= ($dari == "Rheamur") ? "checked" : "" ?>> Rheamur<br>
        <input type="radio" name="dari" value="Kelvin" <?= ($dari == "Kelvin") ? "checked" : "" ?>> Kelvin<br>
        
        Ke:<br>
        <input type="radio" name="ke" value="Celcius" <?= ($ke == "Celcius") ? "checked" : "" ?>> Celcius<br>
        <input type="radio" name="ke" value="Fahrenheit" <?= ($ke == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="Rheamur" <?= ($ke == "Rheamur") ? "checked" : "" ?>> Rheamur<br>
        <input type="radio" name="ke" value="Kelvin" <?= ($ke == "Kelvin") ? "checked" : "" ?>> Kelvin<br>
        
        <button type="submit" name="submit">Konversi</button>
    </form>
    <br>

    <?php  
    // Menampilkan hasil jika variabel $hasil sudah memiliki nilai
    if ($hasil !== "") {
        // Menggunakan number_format untuk membatasi 1 angka di belakang koma sesuai contoh (136.4 °F)
        echo "<b>Hasil Konversi: " . number_format((float)filter_var($hasil, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION), 1, '.', '') . " " . preg_replace('/[0-9.-]/', '', $hasil) . "</b>";
    }
    ?>
</body>
</html>