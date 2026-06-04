<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 301</title>
</head>
<body>
    <form action="" method="POST">
        <label for="peserta">Jumlah Peserta:</label>
        <input type="number" name="peserta" id="peserta" required>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <br>

    <?php  
    if (isset($_POST['cetak'])) {
        $jumlah_peserta = $_POST['peserta'];
        $i = 1;

        while ($i <= $jumlah_peserta) {
            if ($i % 2 == 1) {
                echo "<h2 style='color: red;'>Peserta ke-$i</h2>";
            } else {
                echo "<h2 style='color: green;'>Peserta ke-$i</h2>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>