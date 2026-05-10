<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK-201</title>
</head>
<body>
    <form action="" method="post">
        Nama : 1 <input type="text" name="nama1" required><br>
        Nama : 2 <input type="text" name="nama2" required><br>
        Nama : 3 <input type="text" name="nama3" required><br>
        <button type="submit" name="submit">Urutkan</button>
    </form>
    <br>

    <?php
    // Validasi HTTP request
    if (isset($_POST['submit'])) {
        // buat menangkap data dari form
        $n1 = $_POST['nama1'];
        $n2 = $_POST['nama2'];
        $n3 = $_POST['nama3'];

        echo "<b>Output</b><br>";

        // Blok 1 jika nama 1 (n1) adalah paling kecil abjadnya
        if ($n1 <= $n2 && $n1 <= $n3) {
            if ($n2 <= $n3) {
                echo "$n1 <br> $n2 <br> $n3";
            } else {
                echo "$n1 <br> $n3 <br> $n2";
            }
        }
        // Blok 2 jika nama 2 (n2) adalah paling kecil abjadnya
        elseif ($n2 <= $n1 && $n2 <= $n3) {
            if ($n1 <= $n3) {
                echo "$n2 <br> $n1 <br> $n3";
            } else {
                echo "$n2 <br> $n3 <br> $n1";
            }
        }
        // Blok 3 jika nama 3 (n3) adalah paling kecil abjadnya
        else {
            if ($n1 <= $n3) {
                echo "$n3 <br> $n1 <br> $n3";
            } else {
                echo "$n3 <br> $n2 <br> $n1";
            }
        }
    }
    ?>
</body>
</html>