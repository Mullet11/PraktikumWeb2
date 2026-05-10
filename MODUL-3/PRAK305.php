<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="kata" required>
        <button type="submit" name="submit">submit</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        // Mengambil string yang diinputkan
        $kata = $_POST['kata'];
        
        // Menghitung panjang karakter dari string tersebut
        $panjang = strlen($kata);
        
        echo "<b>Input:</b><br>";
        echo $kata . "<br><br>";
        
        echo "<b>Output:</b><br>";
        
        // Loop pertama untuk menelusuri setiap huruf di dalam kata
        for ($i = 0; $i < $panjang; $i++) {
            
            // Loop kedua untuk mencetak huruf yang sedang ditunjuk sebanyak panjang kata
            for ($j = 0; $j < $panjang; $j++) {
                
                // Jika ini adalah cetakan pertama (index $j = 0), cetak huruf Kapital
                if ($j == 0) {
                    echo strtoupper($kata[$i]);
                } 
                // Jika ini cetakan kedua, ketiga, dan seterusnya, cetak huruf kecil
                else {
                    echo strtolower($kata[$i]);
                }
            }
        }
    }
    ?>
</body>
</html>