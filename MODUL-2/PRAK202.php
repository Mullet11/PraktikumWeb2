<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK-202</title>
</head>
<style>
    .error {color: red; }
</style>
<body>
    <?php  
    // insialisasi awal variabel dengan string kosong
    $pesanNama = $pesanNim = $pesanJk = "";
    $nama = $nim = $jk = "";
    
    // mengecek apakah form sudah disubmit
    if (isset($_POST['submit'])) {
        
        // validasi kolom nama
        if (empty($_POST['nama'])) {
            $pesanNama = "nama tidak boleh kosong";
        } else {
            $nama = $_POST['nama']; //buat menyimpan nilai nama jika ada 
        }

        //validasi kolom NIM
        if (empty($_POST['nim'])) {
            $pesanNim = "nim tidak boleh kosong";
        } else {
            $nim = $_POST['nim']; // buat simpan nilai nim jika ada
        }

        //validasi kolom jenis kelamin
        if (empty($_POST['jk'])) {
            $pesanJk = "jenis kelamon tidak boleh kosong";
        } else {
            $jk = $_POST['jk']; // buat simpan nilai jenis kelamin jika ada
        }
    }
    ?>

    <form action="" method="post">
        Nama: <input type="text" name="nama" value="<?= $nama ?>">
        <span class="error">* <?= $pesanNama ?></span><br>

        Nim: <input type="text" name="nim" value="<?= $nim ?>">
        <span class="error">* <?= $pesanNim ?></span><br>

        Jenis Kelamin: <span class="error">* <?= $pesanJk ?></span><br>
        <input type="radio" name="jk" value="Laki-Laki" <?php if (isset($jk) && $jk == "Laki-Laki") echo "checked"; ?>> Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan" <?php if (isset($jk) && $jk == "Perempuan") echo "checked"; ?>> Perempuan<br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <br>

    <?php  
    // menampilkan output hanya jika tombol ditekan dan semua variabel tidak kosong
    if (isset($_POST['submit']) && !empty($nama) && !empty($nim) && !empty($jk)) {
        echo "<b>Output:</b><br>";
        echo "$nama <br>";
        echo "$nim <br>";
        echo "$jk <br>";
    } 
    ?>
</body>
</html>